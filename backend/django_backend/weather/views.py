from django.shortcuts import render
from rest_framework import viewsets, status, views
from rest_framework.response import Response
import requests

class WeatherView(viewsets.GenericViewSet):

    # def getWeather(self, request):
    #     print("holaaaa123")
    #     print(request.data)
    #     url = "https://www.el-tiempo.net/api/json/v2/provincias/01/municipios/01001"

    #     try:
    #         # Realiza una solicitud GET a la API
    #         response = requests.get(url)
            
    #         # Verifica si la solicitud fue exitosa (código de estado 200)
    #         if response.status_code == 200:
    #             # Convierte la respuesta a formato JSON
    #             datos_tiempo = response.json()

    #             # Renderiza la plantilla con la información del tiempo
    #             return Response(datos_tiempo)
    #         else:
    #             # Si la solicitud no fue exitosa, muestra un mensaje de error
    #             return render(request, 'error.html', {'mensaje': 'Error al obtener datos del tiempo'})
    #     except Exception as e:
    #         # Captura cualquier excepción que pueda ocurrir durante la solicitud
    #         return render(request, 'error.html', {'mensaje': f'Error: {str(e)}'})

    def getWeather(self, request):
        try:
            coordinates = request.data.get('coordinates', {})
            print("coordenaaeeees")
            print(coordinates)
            lat = coordinates.get('lat', None)
            lon = coordinates.get('lng', None)

            if lat is not None and lon is not None:
                print("entre a que no son noneeee")
                # Primera petición para obtener el nombre de la provincia
                nominatim_url = f"https://nominatim.openstreetmap.org/reverse?lat={lat}&lon={lon}&format=json"
                nominatim_response = requests.get(nominatim_url)
                nominatim_data = nominatim_response.json()
                provincia_nombre = nominatim_data.get('address', {}).get('state_district', None)

                if not provincia_nombre:
                    return Response({"error": "Error al obtener el nombre de la provincia"}, status=status.HTTP_404_NOT_FOUND)

                # Segunda petición para obtener el código de la provincia
                print("tenim el nom de provinciaaa")

                provincias_url = "https://www.el-tiempo.net/api/json/v2/provincias"
                provincias_response = requests.get(provincias_url)
                provincias_data = provincias_response.json().get('provincias', {})
                codigo_provincia = None

                for provincia in provincias_data:
                    if provincia.get('NOMBRE_PROVINCIA', None).lower().replace(' ', '') == provincia_nombre.lower().replace(' ', ''):
                        codigo_provincia = provincia.get('CODPROV', None)
                        break

                if not codigo_provincia:
                    return Response({"error": "Error al obtener el código de la provincia"}, status=status.HTTP_404_NOT_FOUND)
                print("tenim el codigo de provinciaaa")

                # Tercera petición para obtener la lista de municipios en la provincia
                municipios_url = f"https://www.el-tiempo.net/api/json/v2/provincias/{codigo_provincia}/municipios"
                municipios_response = requests.get(municipios_url)
                municipios_data = municipios_response.json().get('municipios', {})

                # Cuarta petición para obtener la información del tiempo del municipio específico
                municipio_nombre = nominatim_data.get('address', {}).get('town', None)
                codigo_municipio = None
                print(municipio_nombre)
                if municipio_nombre is None:
                    print("es noneeeee")
                    municipio_nombre = nominatim_data.get('address', {}).get('village', None)
                print(municipio_nombre)

                for municipio in municipios_data:
                    if municipio.get('NOMBRE', None).lower().replace(' ', '') == municipio_nombre.lower().replace(' ', ''):
                        codigo_municipio = str(municipio.get('CODIGOINE', None))[:5]
                        break

                if not codigo_municipio:
                    return Response({"error": "Error al obtener el código del municipio"}, status=status.HTTP_404_NOT_FOUND)
                print("tenim el codigo de municipioooo")

                municipio_url = f"https://www.el-tiempo.net/api/json/v2/provincias/{codigo_provincia}/municipios/{codigo_municipio}"
                municipio_response = requests.get(municipio_url)
                municipio_data = municipio_response.json()
                print("tenim municipio dataaaa")

                # Devolver la información del tiempo del municipio específico
                return Response(municipio_data)

            else:
                return Response({"error": "Error: Se requieren latitud y longitud"}, status=status.HTTP_404_NOT_FOUND)

        except Exception as e:
            return Response({"error": "Se ha producido un error y no se ha podido completar la operacion"}, status=status.HTTP_400_BAD_REQUEST)
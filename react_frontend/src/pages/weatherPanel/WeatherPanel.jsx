import React from "react";
import { useEffect, useState } from "react";
import { useAuth } from '@/hooks/auth/useAuth'
import { useNavigate } from 'react-router-dom';
import { useWeather } from "@/hooks/weather/useWeather";
import { useStations } from "@/hooks/stations/useStations";
import './WeatherPanel.css';
import { format } from 'date-fns';
import GeoLocationComponent from '@/components/client/geolocation/Geolocation';
import ClipLoader from "react-spinners/ClipLoader";
import despejado from './imgs/9040636.png';

const WeatherPanel = () => {
  const { weather, getWeather } = useWeather();
  const navigate = useNavigate();
  const [userLocation, setUserLocation] = useState(null);
  let [loading, setLoading] = useState(true);
  let [color, setColor] = useState("#ffffff");
  const override = {
    display: "block",
    margin: "0 auto",
    borderColor: "blue",
  };
  const { stations } = useStations();

  const handleLocationFetch = location => {
    setUserLocation(location);
    getWeather(location);
  }

  useEffect(() => {
    console.log(weather);
    console.log('stations: ',stations);
  }, [userLocation]);

  const marcarComoLeidas = (uuid) => {
    console.log(`Incidencia ${uuid} marcada como leída.`);
    checkView(uuid)
  };

  const redirects = {
    home: () => {
      navigate('/')
    }
  }

  return (
    <>
    <GeoLocationComponent onLocationFetch={handleLocationFetch} />
    <div className="p-4 bg-gray-100 min-h-screen">
        <button 
        onClick={() => redirects.home()} 
        className="absolute top-4 right-4 bg-transparent text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded"
      >
        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <h1 className="text-xl md:text-2xl font-bold text-gray-900 mb-6 text-center">
        Clima de hoy
      </h1>

      {[weather].length > 0 ? (
        [weather].map(item => (
          <div key={item} id="weather-panel">
            {item?.municipio ? (
              <>
              <div id="location">{item?.municipio?.NOMBRE ?? ''}, {item?.municipio?.NOMBRE_PROVINCIA ?? ''}</div>
              <div id="icon"><i className="fas fa-sun"></i></div>
              <div id="temperature">{item?.temperatura_actual ?? ''}°C</div>
              <div id="details">
                <p>Precipitaciones: {item?.precipitacion ?? ''}%</p>
                <p>Humedad: {item?.humedad ?? ''}%</p>
                <p>Viento: {item?.viento ?? ''} km/h</p>
              </div>
              <div id="date">Fecha: {item?.fecha ? format(new Date(item?.fecha), "d 'de' MMMM 'de' yyyy") : ''}</div>
              </>
            ) : (
              <>
              <div id="location">Espera mientras se carga la información sobre el tiempo. Puede tardar unos segundos</div>
              <ClipLoader
              color={color}
              loading={loading}
              cssOverride={override}
              size={150}
              aria-label="Loading Spinner"
              data-testid="loader"
              />
              </>
            )}
          </div>
        ))
      ) : (
        <p>No hay información sobre el clima disponible</p>
      )}

      <h1 className="text-2xl md:text-2xl font-bold text-blue-900 mb-6 text-center">Listado de estaciones</h1>

      {stations.length > 0 ? (
        stations.map(item => (
          <div key={item} id="station-panel">
            {item ? (
              <>
                <div id="location">{item?.name ?? ''}, {item?.status ?? ''}</div>
                <div id="location">{item?.tiempo?.municipio?.NOMBRE ?? ''}, {item?.tiempo?.municipio?.NOMBRE_PROVINCIA ?? ''}</div>

                <div id="temperature-panel">
                  <div id="temperature">{item?.tiempo?.temperatura_actual ?? ''}°C</div>
                  <div id="icon">
                    {item?.tiempo?.stateSky?.description === "Despejado" ? (
                      <img src={despejado} alt="Clima" className="w-1/5"/>
                    ) : (
                      <i className="fas fa-cloud"></i>
                    )}
                  </div>
                </div>

                <div id="details">
                  <p>Precipitaciones: {item?.tiempo?.precipitacion ?? ''}%</p>
                  <p>Humedad: {item?.tiempo?.humedad ?? ''}%</p>
                  <p>Viento: {item?.tiempo?.viento ?? ''} km/h</p>
                </div>
              </>
            ) : (
              <>
              <div id="location">Espera mientras se carga la información sobre el tiempo. Puede tardar unos segundos</div>
              <ClipLoader
              color={color}
              loading={loading}
              cssOverride={override}
              size={150}
              aria-label="Loading Spinner"
              data-testid="loader"
              />
              </>
            )}
          </div>
        ))
      ) : (
        <p>No hay información sobre el clima disponible</p>
      )}

      </div>
    </>
  );
};

export default WeatherPanel;

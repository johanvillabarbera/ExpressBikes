import React from "react";
import { useEffect } from "react";
import { useAuth } from '@/hooks/auth/useAuth'
import { useNavigate } from 'react-router-dom';
import { useWeather } from "@/hooks/weather/useWeather";
import './WeatherPanel.css';

const WeatherPanel = () => {
  const { weather, setWeather, getWeather } = useWeather();
  const { isAuth } = useAuth();
  const navigate = useNavigate();

  useEffect(() => {
    getWeather();
    console.log('clima: ', weather);
  }, [getWeather]);

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
      {/* {weather.length > 0
      ?(
        <div id="weather-panel">
          <div id="location">{weather.municipio.NOMBRE}, {weather?.municipio.NOMBRE_PROVINCIA}</div>
          <div id="icon"><i className="fas fa-sun"></i></div>
          <div id="temperature">25°C</div>
          <div id="details">
            <p>Precipitaciones: 10%</p>
            <p>Humedad: 75%</p>
            <p>Viento: 15 km/h</p>
          </div>
          <div id="date">Fecha: 3 de marzo de 2024</div>
        </div>
        
      ) : (
        <div id="weather-panel">
          <div id="location">Prova, Prova</div>
          <div id="icon"><i className="fas fa-sun"></i></div>
          <div id="temperature">25°C</div>
          <div id="details">
            <p>Precipitaciones: 10%</p>
            <p>Humedad: 75%</p>
            <p>Viento: 15 km/h</p>
          </div>
          <div id="date">Fecha: 3 de marzo de 2024</div>
        </div>
      )} */}

        <div id="weather-panel">
          <div id="location">{weather.length > 0 ? weather?.municipio.NOMBRE ?? '' : ''}, {weather.length > 0 ? weather?.municipio.NOMBRE_PROVINCIA ?? '' : ''}</div>
          <div id="icon"><i className="fas fa-sun"></i></div>
          <div id="temperature">25°C</div>
          <div id="details">
            <p>Precipitaciones: 10%</p>
            <p>Humedad: 75%</p>
            <p>Viento: 15 km/h</p>
          </div>
          <div id="date">Fecha: 3 de marzo de 2024</div>
        </div>

      </div>
  );
};

export default WeatherPanel;

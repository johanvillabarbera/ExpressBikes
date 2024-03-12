import { useContext, useState, useCallback } from "react";
import WeatherContext from "../../context/weather/WeatherContext";
import WeatherService from "../../services/weather/WeatherService";

export function useWeather() {
    const { weather, setWeather } = useContext(WeatherContext);

    const getWeather = useCallback((coordinates) => {
        console.log(coordinates);
        WeatherService.getWeather(coordinates)
            .then(res => {
                console.log('hola');
                console.log(res);
                setWeather(res.data);
            }).catch(err => console.log(err))
    }, [setWeather])

    return {weather, setWeather, getWeather};
}
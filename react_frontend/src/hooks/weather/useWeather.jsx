import { useContext, useState, useCallback } from "react"
import WeatherService from "../../services/weather/WeatherService"

export function useWeather() {
    const [weather, setWeather] = useState({});

    const getWeather = useCallback(() => {
        WeatherService.getWeather()
            .then(res => {
                console.log('hola');
                console.log(res);
                setWeather(res.data);
            }).catch(err => console.log(err))
    }, [setWeather])

    return {weather, setWeather, getWeather};
}
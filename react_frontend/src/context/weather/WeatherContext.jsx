import React, { useCallback, useContext, useState, useEffect } from "react"
import WeatherService from "../../services/weather/WeatherService"

const Context = React.createContext({})

export function WeatherContextProvider({ children }) {
    const [weather, setWeather] = useState([])

    useEffect(function () {
        WeatherService.getWeather()
            .then(res => {
                setWeather(res.data)
            })
            .catch(err => console.log(err))
    }, [setWeather])    

    return <Context.Provider value={{ weather, setWeather }}>
        {children}
    </Context.Provider>
}

export default Context
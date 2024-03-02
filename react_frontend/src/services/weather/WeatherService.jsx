import api from '../api'
import WeatherEndpoints from './WeatherEndpoint'

const WeatherService = {
    
    getWeather() {
        return api().get(WeatherEndpoints.GET)
    }

}

export default WeatherService
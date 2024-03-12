import api from '../api'
import WeatherEndpoints from './WeatherEndpoint'

const WeatherService = {
    
    getWeather(coordinates) {
        return api().post(WeatherEndpoints.GET,{'coordinates':coordinates})
    }

}

export default WeatherService
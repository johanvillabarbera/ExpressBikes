import axios from 'axios';
import secrets from '../secrets';

const Axios = () => {
    let api = null;
    api = axios.create({
        baseURL: secrets.URL_FS,
        headers: {
            "Content-type": "application/json",
            "token": "16o30KFkvXCYhfIqn4wL"
        }
    });

    api.interceptors.response.use(
        (response) => {
            return Promise.resolve(response);
        },
        (error) => {
            console.log(error);
            return Promise.reject(error);
        }
    );

    return api;
}

export default Axios;
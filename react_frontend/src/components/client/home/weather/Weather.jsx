import weather from './weather.png'
import { useIncidentStages } from "@/hooks/incidentStages/useIncidentStages"
import { useEffect } from 'react'
import { useAuth } from '@/hooks/auth/useAuth'
import { useNavigate } from 'react-router-dom';

const Weather = () => {
    const { notifyUser,getNotifysUser } = useIncidentStages();
    const { isAuth } = useAuth();
    const navigate = useNavigate();

    const redirects = {
        weather: () => {
          navigate('/weather')
        },
        login: () => {
            navigate('/login')
        }
      }

    useEffect(() => {
        
        if (isAuth) getNotifysUser()
    }, [isAuth]);

    return (
        <div style={{ position: 'fixed', zIndex: 500, top: '0.9rem', right: '6rem' }}>
            <span style={{ position: 'fixed', zIndex: 501 }}>
                {
                    isAuth
                    ? <img src={weather} alt="Clima" className="w-2/4" onClick={() => redirects.weather()}/>
                        : <img src={weather} alt="Clima" className="w-2/4" onClick={() => redirects.login()}/>
                }
            </span>
        </div>
    )
}

export default Weather
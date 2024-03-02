import React, { Suspense } from "react"
import HomeWelcome from '../../components/client/home/homeWelcome/homeWelcome'
import HomeMaps from "../../components/client/home/homeMaps/homeMaps"
import Notify from "../../components/client/home/notify/Notify"
import Weather from "@/components/client/home/weather/Weather"

// import QrScanner from "../qrScanner/QrScanner"
function Home() {
    return (
        <div>
                {/* <QrScanner /> */}
                <Notify />
                <Weather />
                <HomeMaps />
                <HomeWelcome />
        </div>
    )
}

export default Home
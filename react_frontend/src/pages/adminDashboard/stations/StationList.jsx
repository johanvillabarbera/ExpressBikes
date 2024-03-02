import React, { useState } from "react"
import { useStations } from "@/hooks/stations/useStations"
import StationUpdate from "./StationUpdate"
import StationCreate from "./StationCreate"
import StationDelete from "./StationDelete"

const StationList = () => {
    const { stations, setStations } = useStations();

    const tarjetas = [
        { titulo: "Tarjeta 1", descripcion: "Descripción 1" },
        { titulo: "Tarjeta 2", descripcion: "Descripción 2" },
        { titulo: "Tarjeta 3", descripcion: "Descripción 3" },
        { titulo: "Tarjeta 4", descripcion: "Descripción 4" },
      ];

    return(
        <>
        {/* Tarjetas horizontales */}
        <div className="flex justify-between mb-4 space-x-4">
          {tarjetas.map((card, index) => (
            <div key={index} className="w-1/4 bg-gradient-to-br from-blue-200 to-blue-500 shadow-lg p-2">
              <h3 className="font-bold">{card.titulo}</h3>
              <p>{card.descripcion}</p>
            </div>
          ))}
        </div>

        {/* Botón crear */}
        <StationCreate />

        {/* Tabla responsive */}
        <div className="overflow-x-auto shadow-md rounded-lg mt-6">
          <table className="min-w-full table-auto">
            <thead className="bg-gray-800 text-white">
              <tr>
                <th className="px-6 py-3 text-xs font-medium uppercase tracking-wider">Nombre</th>
                <th className="px-6 py-3 text-xs font-medium uppercase tracking-wider">Descripción</th>
                <th className="px-6 py-3 text-xs font-medium uppercase tracking-wider">Status</th>
                <th className="px-6 py-3 text-xs font-medium uppercase tracking-wider">Controls</th>
              </tr>
            </thead>
            <tbody className="bg-white divide-y divide-gray-200">
              {stations.map((item, index) => (
                <tr key={index} className="hover:bg-gray-100">
                  <td className="px-6 py-4 whitespace-nowrap">{item.name}</td>
                  <td className="px-6 py-4 whitespace-nowrap">{item.description}</td>
                  <td className="px-6 py-4 whitespace-nowrap">{item.status}</td>
                  <td className="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <span className="mr-4">
                      <StationUpdate data={item} />
                    </span>
                    <span>
                      <StationDelete uuid={item.uuid}/>
                    </span>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
        </>
    )
}

export default StationList
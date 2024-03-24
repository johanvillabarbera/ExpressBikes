# Express Bikes

Express Bikes es una aplicación web de servicio de alquiler de bicicletas enfocada al uso de bicicletas las cuáles se gestionan mediantes estaciones situadas en distintos puntos de una ciudad o un pueblo.

## Tecnologías utilizadas

[![My Skills](https://skillicons.dev/icons?i=react,js,astro,html,css,django,py,postgres,docker,arduino)](https://skillicons.dev)

- **React**: Biblioteca Javascript de código abierto diseñada para crear interfaces de usuario.
- **Astro**: Biblioteca utilizada para generar sitios estáticos y dinámicos en el mismo proyecto.
- **HTML**: Lenguaje de marcado utilizado para la estructura de las páginas web.
- **CSS**: Lenguaje de estilo utilizado para el diseño visual de las páginas web.
- **Django**: Framework de desarrollo web utilizado para la lógica del backend.
- **Python**: Lenguaje de programación utilizado para el desarrollo del backend.
- **PostgreSQL**: Sistema de gestión de bases de datos relacional utilizado para almacenar datos.
- **Docker**: Plataforma de contenedores utilizada para facilitar la implementación y el despliegue del proyecto.
- **Arduino**: Plataforma de hardware y software de código abierto utilizada para la interacción con dispositivos físicos.

## Páginas

### Home
En la página principal

### Sign-up/Login
Users can create a new account or log in to an existing one. JWT is used for user authentication and authorization.

### User Dashboard
Once authenticated, users are directed to a dashboard where they can view their profile information, rental history, and available balance. They can also rent a bike from this page.

### Rental Page
On this page, users can select an available bike to rent, set the rental duration, and confirm the transaction.

### Return Page
After using the bike, users can return it from this page. They can view a summary of the rental, calculate the total cost, and confirm the return.

### Admin Panel
Administrators have access to a special panel where they can manage users, bikes, and transactions. They can add or delete users, view and modify bike information, and monitor transaction history.

## Installation and Usage

1. Clone this repository to your local machine.
2. Install dependencies using npm:

   ```bash
   npm install

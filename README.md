# Gestión de Empleados

## Descripción
Este proyecto consiste en una API REST desarrollada con Laravel para gestionar la información de empleados, junto con una aplicación web creada con Angular para administrar dicha información.

## Configuración del Ambiente Local

### Requisitos
- PHP 8.3.4 o superior
- Composer 2.7.2
- MySQL Server 8
- Node.js y npm
- Git

### Instalación y Configuración

#### API (Backend con Laravel)
1. Clonar el repositorio y navegar al directorio del proyecto.
2. Ejecutar `composer install` para instalar las dependencias de PHP.
3. Configurar el archivo `.env` con las credenciales de la base de datos.
4. Ejecutar `php artisan migrate --seed` para crear la base de datos y cargar datos de prueba.
5. Iniciar el servidor de desarrollo con `php artisan serve`.

#### Aplicación Web (Frontend con Angular)
1. Navegar al directorio de la aplicación Angular.
2. Ejecutar `npm install` para instalar las dependencias de JavaScript.
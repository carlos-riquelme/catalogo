<p align="center"><img width="250" src="http://img.eltipografo.cl/media/2012/04/logo-UAC.jpg"></p>


## Catálogo de Tesis para la Universidad de Aconcagua Sede Ancud

La presente aplicación se desarrolló como solución a la problemática detectada durante el período de práctica profesional iniciado en abril de 2018 como parte del proceso de Titulación de la carrera de Técnico Universitario en Informática de la Universidad de Los Lagos, Sede Ancud, Chiloé, Chile.
La práctica se desarrolló en la Sede Ancud de la Universidad de Aconcagua.
La presente aplicación se desarrolló utilizando el Framework [Laravel](https://laravel.com/).

## Instalación. Requisitos.

La aplicación web requiere de los siguientes componentes para poder ser utilizada/montada en un servidor (local o remoto):
- Apache 2.0 o superior.
- PHP 5.6.24 o superior. Recomienda versión 7.
- MySQL 5.5 o superior.

Además, las siguientes aplicaciones se recomiendan para instalar las librerías necesarias:
- Composer.
- Nodejs.
- Git.


## Instalación.

Para instalar la aplicación, situarse en la carpeta de trabajo del servidor y ejecutar el siguiente código:
```
    git clone https://github.com/carlos-riquelme/catalogo.git
```

Una vez que se haya clonado el repositorio, ejecutar:

```
    composer install
```

Posteriormente,

```
    npm install
```

## Configuración

Editar el archivo [.env.example] con los datos de conexión a su base de datos y renombrar a [.env]


## Primera Inicialización

Abrir el directorio donde se ha descargado la aplicación en la línea de comandos y ejecutar las migraciones necesarias para preparar la base de datos:

```
    php artisan migrate:refresh --seed
```

Este comando además ingresará los datos del usuario administrador en la base de datos:
- Usuario: **admin@admin.com**
- Contraseña: **123456**

## Licencia

[MIT license](https://opensource.org/licenses/MIT).

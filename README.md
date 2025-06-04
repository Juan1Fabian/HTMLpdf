# Proyecto AccesoDatos

Este proyecto es una aplicación PHP para la gestión de datos de mascotas y propietarios, con generación de reportes en PDF usando la librería [spipu/html2pdf](https://github.com/spipu/html2pdf). Utiliza XAMPP como entorno de desarrollo y Composer para la gestión de dependencias.

## Estructura de Carpetas

```
accesodatos/
│
├── app/
│   ├── config/
│   │   └── Database.php         # Configuración y conexión a la base de datos
│   ├── entities/
│   │   └── Mascota.entidad.php  # Entidad Mascota
│   └── models/
│       ├── Mascota.php          # Modelo Mascota (CRUD)
│       └── Propietarios.php     # Modelo Propietarios (CRUD)
│
├── public/
│   └── css/
│       └── estilos-reporte.html # Estilos para los reportes PDF
│
├── vendor/                      # Dependencias instaladas por Composer (NO editar)
│
├── views/
│   ├── contents/
│   │   ├── content-reporte3.php # Contenido HTML para reporte de mascotas
│   │   └── content-reporte4.php # Contenido HTML para reporte de propietarios
│   └── reports/
│       ├── reporte2.php         # Ejemplo de reporte PDF
│       ├── reporte3.php         # Reporte PDF de mascotas
│       └── reporte4.php         # Reporte PDF de propietarios
│
├── composer.json                # Dependencias del proyecto
├── composer.lock                # Versiones exactas de dependencias instaladas
└── README.md                    # (Este archivo)
```

## Instalación

1. **Clona el repositorio o copia la carpeta en tu servidor local (XAMPP).**
2. **Instala Composer**  
   [https://getcomposer.org/download/](https://getcomposer.org/download/)
3. **Instala las dependencias del proyecto:**
   ```
   composer install
   ```
4. **Configura la base de datos** en `app/config/Database.php` según tus credenciales de MySQL.
5. **Asegúrate de habilitar las extensiones necesarias en tu `php.ini`:**
   - `extension=gd`
   - `extension=mbstring`
   - `extension=mysqli`
   - `extension=zip`
   - etc.

## Uso

- Accede a los reportes PDF desde las rutas:
  - `views/reports/reporte3.php` (Mascotas)
  - `views/reports/reporte4.php` (Propietarios)

- Los archivos en `views/contents/` contienen el HTML y estilos de las tablas de los reportes.

## Dependencias principales

- [spipu/html2pdf](https://github.com/spipu/html2pdf)  
  Para la generación de PDFs desde HTML.

## Notas

- No edites la carpeta `vendor/` ni los archivos `composer.lock` manualmente.
- Si agregas nuevas dependencias, usa `composer require`.
- Los estilos de los reportes pueden personalizarse en `public/css/estilos-reporte.html` o en los archivos de contenido.

---

## Autor

# Juan Fabian Trucios Quispe
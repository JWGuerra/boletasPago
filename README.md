# Sitemas de consultas para boleta de Pagos
* Sistema diseñado para solicitar boletas de pago correspondiente a un determinado año y periodo laboral,
* Se requiere como parámetros, DNI, Fecha de Nacimiento, Nro de Celular, y año, para solicitar la boleta.

# Requisitos
* Windows 10 / 11
* Navegador WEB 2.0 (Google Chrome, Edge, Firefox, Brave, Safari, etc)

# Instalación
* Xamppp 0.0.30 / PHP 8.0.30
* SQL Server 2019
* Microsoft Drivers for PHP for SQL Server (https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16)

# Configuración del proyecto
* Copiar la carpeta boletasPago dentro de la carpeta 'C:\xampp\htdocs'
* Configurar php.init y agregar las extensiones de los drivers de SQL para PHP.
* Copiar los drivers correspondiente a la versión de PHP a la carpeta 'C:\xampp\php\ext'.
* En php.ini agregar las siguientes extensiones:
extension=php_sqlsrv_80_nts_x86.dll
extension=php_pdo_sqlsrv_80_nts_x86.dll
extension=php_sqlsrv_80_ts_x86.dll
extension=php_pdo_sqlsrv_80_ts_x86.dll
extension=php_sqlsrv_80_nts_x64.dll
extension=php_pdo_sqlsrv_80_nts_x64.dll
extension=php_sqlsrv_80_ts_x64.dll
extension=php_pdo_sqlsrv_80_ts_x64.dll
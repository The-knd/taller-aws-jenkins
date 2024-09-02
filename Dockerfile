# Imagen base de PHP con Apache
FROM php:8.0-apache

# Instalar extensiones necesarias de PHP
RUN docker-php-ext-install mysqli

# Copiar el código fuente a la imagen
COPY src/ /var/www/html/

# Configurar permisos adecuados para la carpeta de Apache
RUN chown -R www-data:www-data /var/www/html

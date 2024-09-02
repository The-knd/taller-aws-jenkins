# Usar la imagen base de PHP con Apache
FROM php:8.0-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar los archivos de la aplicación en el directorio raíz de Apache
COPY src/ /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80

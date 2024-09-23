# Usar la imagen base de PHP con Apache
FROM php:8.0-apache

# Instalar extensiones de PHP necesarias y el cliente de MySQL
RUN apt-get update && \
    apt-get install -y default-mysql-client && \
    docker-php-ext-install mysqli pdo pdo_mysql

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80


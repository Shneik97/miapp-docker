FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia los archivos del proyecto
COPY . /var/www/html/
COPY ./php-mysql-alumnos/src/ /var/www/html/

EXPOSE 80
FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia solo el contenido de src/ al directorio raíz de Apache
COPY ./php-mysql-alumnos/src/ /var/www/html/

# Exponer puerto 80
EXPOSE 80

# Asegurar que Apache corra en primer plano
CMD ["apache2-foreground"]

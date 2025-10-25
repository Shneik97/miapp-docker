FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia todos los archivos PHP al directorio raíz de Apache
COPY ./php-mysql-alumnos/src/ /var/www/html/

# Exponer puerto 80 para HTTP
EXPOSE 80

# Ejecutar Apache en primer plano
CMD ["apache2-foreground"]

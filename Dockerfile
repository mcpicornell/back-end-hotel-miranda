FROM php:8.0-apache

# Copiar los archivos de la aplicación web al directorio de trabajo del contenedor
COPY ./app /var/www/html/
COPY ./vendor /var/www/html/


# Instalar extensiones de PHP adicionales si es necesario
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
RUN apt-get update && apt-get install -y \
    mysql-client
RUN apt-get update && apt-get install -y \
    mysql-server \
    php-mysql
# Configurar el servidor Apache si es necesario
RUN a2enmod rewrite
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Establecer permisos para los archivos y directorios copiados
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

# Exponer el puerto 80 para permitir el acceso a la aplicación web
EXPOSE 80

# Iniciar el servidor Apache cuando se ejecute el contenedor
CMD ["apache2-foreground"]
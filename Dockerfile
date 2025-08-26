# Usa la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instala extensiones necesarias para Laravel (pdo_mysql, mbstring, etc.)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath xml

# Instala Composer (gestor de dependencias PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia todo el código de tu proyecto al directorio de Apache
COPY . /var/www/html

# Da permisos correctos para las carpetas de almacenamiento y cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instala dependencias de PHP con Composer
RUN composer install --no-dev --optimize-autoloader

# Genera la clave de Laravel
RUN php artisan key:generate

# Expone el puerto 80 (puerto por defecto HTTP)
EXPOSE 80

# Comando para correr Apache en primer plano
CMD ["apache2-foreground"]

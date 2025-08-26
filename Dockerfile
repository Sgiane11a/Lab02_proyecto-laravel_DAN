FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath xml

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

RUN composer install --no-dev --optimize-autoloader

RUN cp /var/www/html/.env.example /var/www/html/.env

RUN php artisan key:generate

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]

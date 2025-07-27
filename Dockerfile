FROM laravelsail/php83-composer

WORKDIR /var/www/html

COPY . .

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd pdo pdo_mysql

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

COPY .env.example .env
RUN php artisan key:generate

EXPOSE 8080
CMD php artisan serve --host=0.0.0.0 --port=8080


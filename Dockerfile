FROM laravelsail/php83-composer

WORKDIR /var/www/html

# Install Node.js and npm
RUN apt-get update && apt-get install -y curl gnupg \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Install PHP extensions
RUN apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip unzip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd pdo pdo_mysql

# Copy project files
COPY . .

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Prepare Laravel app
COPY .env.example .env
RUN php artisan key:generate

# Install frontend dependencies and build assets
RUN npm install
RUN npm run build

# Expose and run Laravel server
EXPOSE 8080
CMD php artisan serve --host=0.0.0.0 --port=8080


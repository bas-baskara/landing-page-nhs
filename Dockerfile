FROM php:8.0
RUN apt-get update -y && apt-get install -y openssl zip unzip git libonig-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
WORKDIR /app
COPY . /app
COPY .env.example /app/.env
RUN composer install

# php artisan serve is a command to run php web server intended only for application demonstration not for production
CMD php artisan key:generate && php artisan optimize && php artisan serve --host=0.0.0.0 --port=8001
EXPOSE 8181
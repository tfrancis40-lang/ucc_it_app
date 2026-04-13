FROM php:8.4-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git curl unzip zip libzip-dev \
    nodejs npm \
    && docker-php-ext-install zip pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# 🔥 THIS IS THE FIX
RUN npm install
RUN npm run build

RUN php artisan config:clear
RUN php artisan cache:clear

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}

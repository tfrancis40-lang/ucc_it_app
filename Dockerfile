FROM php:8.4-fpm

WORKDIR /app

# System dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libzip-dev \
    zip \
    nodejs \
    npm \
    && docker-php-ext-install zip pdo pdo_mysql

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Install Node dependencies + build assets (🔥 THIS WAS MISSING)
RUN npm install
RUN npm run build

# Laravel setup
RUN cp .env.example .env
RUN php artisan key:generate

# Permissions
RUN chmod -R 775 storage bootstrap/cache

# SQLite (move this BEFORE runtime if needed)
RUN touch database/database.sqlite

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}

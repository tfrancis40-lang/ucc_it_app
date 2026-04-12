# Use PHP 8.4 (fixes Symfony >=8 requirement)
FROM php:8.4-fpm

# Set working directory
WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files into container
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Create .env file from example (fixes your error)
RUN cp .env.example .env

# Generate Laravel app key
RUN php artisan key:generate

# Set permissions (important for Laravel)
RUN chmod -R 775 storage bootstrap/cache

# Expose port (for Laravel dev server if used)
EXPOSE 8000

# Start Laravel (adjust if using Nginx in production)
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}

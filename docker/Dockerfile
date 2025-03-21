# Use the latest PHP 8.3.x version (official image)
FROM php:8.3.19-cli

# Set the working directory inside the container
WORKDIR /var/www/html

# Install required system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev libpng-dev libzip-dev libonig-dev

# Install PHP extensions using "official PHP Docker image"
RUN docker-php-ext-install pdo pdo_mysql mbstring zip gd

# Clean up APT cache after installing dependencies
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project file to the container
COPY ../ .

# Copy the Nginx configuration
# COPY nginx.conf /etc/nginx/nginx.conf

# Install PHP dependencies using Composer
# RUN composer install --no-dev --optimize-autoloader

# Populate Database tables
# RUN vendor/bin/doctrine-migrations migrate -y

# Expose port (optional, if running a web server)
EXPOSE 3000

# Set the default command (can be overridden)
CMD ["php", "-S", "0.0.0.0:3000", "-t", "public"]
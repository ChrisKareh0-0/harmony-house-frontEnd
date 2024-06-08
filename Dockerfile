FROM php:7.4-fpm

# Install Nginx and other dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql mysqli mbstring zip exif pcntl \
    && apt-get clean

# Create nginx user and group
RUN adduser --system --no-create-home --disabled-login --disabled-password --group nginx

# Copy project files
COPY . /var/www

# Copy Nginx configuration file
COPY nginx.conf /etc/nginx/nginx.conf

# Set working directory
WORKDIR /var/www

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]

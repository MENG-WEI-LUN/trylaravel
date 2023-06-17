FROM php:8.0-apache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    bcmath \
    ctype \
    fileinfo \
    mbstring \
    pdo \
    pdo_mysql \
    tokenizer \
    xml \
    && a2enmod rewrite
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install --no-interaction --no-scripts --prefer-dist
EXPOSE 8000

CMD ["apache2-foreground"]

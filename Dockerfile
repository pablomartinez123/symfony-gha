FROM php:7.4-fpm

# Set working directory
#WORKDIR /var/www

# Install dependencies
#RUN apt-get update && apt-get install -y \
#    build-essential \
#    zip \
#    unzip

# Install composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www

ADD Dockerfile /var/www

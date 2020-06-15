FROM php:7.4.5-apache 
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

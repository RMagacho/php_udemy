FROM php:7.0.9-apache

WORKDIR "/var/www"
VOLUME ["/var/www/html"]

RUN rm /etc/localtime \
    && ln -s /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime

RUN apt-get update --fix-missing && apt-get install -y --force-yes apache2 apt-utils && apt upgrade -y

# Composer
RUN apt install git unzip -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN docker-php-ext-install mysqli \
    && a2enmod rewrite \
    && yes | pecl install xdebug-2.7.2 && docker-php-ext-enable xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d
EXPOSE 80
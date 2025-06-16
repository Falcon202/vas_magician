# docker/common/php-fpm/Dockerfile
FROM php:8.2-fpm AS production

# základní nastavení Laravel aplikace
RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Vývojový target (development)
FROM production AS development

# Xdebug a UID
ARG UID=1000
ARG GID=1000
ARG XDEBUG_ENABLED=false
ARG XDEBUG_MODE=develop,coverage,debug,profile
ARG XDEBUG_HOST=host.docker.internal
ARG XDEBUG_IDE_KEY=DOCKER

RUN pecl install xdebug && docker-php-ext-enable xdebug

# Konfigurace Xdebug
RUN echo "xdebug.mode=${XDEBUG_MODE}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.client_host=${XDEBUG_HOST}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.idekey=${XDEBUG_IDE_KEY}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Práva
RUN groupadd -g ${GID} www && useradd -u ${UID} -g www -m www

USER www
WORKDIR /var/www

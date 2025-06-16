FROM php:8.2-cli

ARG UID=1000
ARG GID=1000

RUN apt-get update && apt-get install -y \
    git unzip zip curl sudo nodejs npm \
    libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

RUN groupadd -g ${GID} www && useradd -u ${UID} -g www -m www && \
    usermod -aG sudo www && echo 'www ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers

USER www
WORKDIR /var/www

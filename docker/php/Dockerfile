FROM php:8-fpm
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN apt-get update && \
    apt-get -y install --no-install-recommends git unzip libzip-dev libicu-dev libonig-dev nodejs && \
    docker-php-ext-install intl pdo_mysql zip bcmath && \
    curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*
WORKDIR /var/www/html/src
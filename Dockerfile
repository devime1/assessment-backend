FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libsqlite3-dev \
    sqlite3 \
    && docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN mkdir -p /var/www/database && touch /var/www/database/database.sqlite

EXPOSE 10000

CMD php artisan config:clear && \
    php artisan cache:clear && \
    php artisan migrate --force --seed && \
    php artisan serve --host=0.0.0.0 --port=10000
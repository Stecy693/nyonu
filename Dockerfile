# Base image PHP
FROM php:8.1-cli

WORKDIR /var/www/html

# Installer packages système et extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libpng-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install bcmath exif intl mbstring pdo_mysql zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier seulement composer.json et composer.lock pour installer les dépendances
COPY composer.json composer.lock ./
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copier le reste du projet (sans .env)
COPY . .

# Exposer le port dynamique fourni par Render
EXPOSE ${PORT:-8000}

# Lancer le serveur Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT:-8000}"]

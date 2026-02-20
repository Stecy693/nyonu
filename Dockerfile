FROM php:8.1-cli

WORKDIR /var/www/html

# Installer packages système et extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libpng-dev libzip-dev libonig-dev libxml2-dev libpq-dev \
    && docker-php-ext-install bcmath exif intl mbstring pdo_pgsql zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Installer les dépendances PHP
COPY composer.json composer.lock ./
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copier le reste du projet
COPY . .

# Exposer le port dynamique
EXPOSE ${PORT:-8000}

# Lancer Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT:-8000}"]

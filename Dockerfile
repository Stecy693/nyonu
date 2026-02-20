# Utiliser PHP CLI officiel
FROM php:8.1-cli

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer packages système + extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libpng-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install bcmath exif intl mbstring pdo_pgsql zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier uniquement les fichiers Composer
COPY composer.json composer.lock ./

# Copier le .env pour que Laravel trouve APP_KEY pendant l'installation
COPY .env . 

# Installer les dépendances PHP
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copier le reste du projet
COPY . .

# Donner les permissions correctes à storage et bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port dynamique fourni par Render
EXPOSE ${PORT:-8000}

# Lancer le serveur Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT:-8000}"]

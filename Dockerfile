# Utiliser une image PHP officielle avec FPM
FROM php:8.2-fpm

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_pgsql mbstring bcmath xml zip

# Installer Composer
COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers du projet
COPY . .

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Donner les droits sur storage et bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Exposer le port utilisé par Laravel
EXPOSE 8000

# Commande pour démarrer Laravel (Render va utiliser APP_KEY défini dans les env)
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000

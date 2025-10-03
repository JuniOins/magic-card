# Utilise PHP 8.2 FPM
FROM php:8.2-fpm

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www/html

# Copier les fichiers du projet
COPY . .

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Générer la clé Laravel
RUN php artisan key:generate

# Exposer le port utilisé par Laravel
EXPOSE 10000

# Commande pour lancer Laravel
CMD php artisan serve --host=0.0.0.0 --port=10000

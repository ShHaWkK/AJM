# Utiliser l'image officielle PHP avec extensions nécessaires
FROM php:8.2-fpm

# Installer des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    nginx \
    supervisor \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring gd zip exif pcntl bcmath opcache

# Installer Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www

# Copier les fichiers de l'application dans le conteneur
COPY . /var/www

# Installer les dépendances PHP
RUN composer install --no-interaction --optimize-autoloader --prefer-dist

# Donner les permissions appropriées au dossier de l'application
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Copier la configuration Nginx
COPY docker/nginx/nginx.conf /etc/nginx/nginx.conf

# Copier la configuration de Supervisor
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Exposer le port 80
EXPOSE 8888

# Commande à exécuter lorsque le conteneur démarre
CMD ["supervisord", "-n"]

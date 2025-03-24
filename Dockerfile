# Image de base PHP
FROM php:8.2-apache

# Active le module Apache rewrite (pour Laravel)
RUN a2enmod rewrite

# Installe les dépendances
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Installe Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définit le dossier de travail
WORKDIR /var/www/html

# Copie les fichiers du projet
COPY . .

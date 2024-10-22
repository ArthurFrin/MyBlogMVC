# Utiliser l'image officielle PHP avec Apache
FROM php:apache

# Activer le module Apache rewrite
RUN a2enmod rewrite

# Installer l'extension pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql

# Redémarrer Apache (ceci n'est pas nécessaire dans le Dockerfile, Docker s'occupe de cela automatiquement)
# RUN service apache2 restart

# Ajouter votre code source dans le conteneur
ADD ./src /var/www/html

# Exposer le port 80 pour Apache (si ce n'est pas déjà fait par l'image de base)
EXPOSE 80

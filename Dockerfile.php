FROM php:8.2-apache

# Installer l'extension mysqli et pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

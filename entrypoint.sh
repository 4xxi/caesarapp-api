#!/bin/sh
composer run-script post-install-cmd && composer run-script symfony-scripts
chown -R www-data /var/www/app
php-fpm

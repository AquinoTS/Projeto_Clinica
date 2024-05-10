#!/bin/bash

# Iniciar o Apache
apache2-foreground &

# Executar o comando 'php artisan package:discover' após um pequeno atraso
sleep 10
cd /var/www/html && php artisan package:discover

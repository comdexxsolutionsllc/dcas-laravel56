#!/usr/bin/env bash

php artisan clear-compiled && php artisan auth:clear-resets && php artisan cache:clear && php artisan config:clear && \
php artisan debugbar:clear && php artisan route:clear && php artisan view:clear

echo Project files cleared.

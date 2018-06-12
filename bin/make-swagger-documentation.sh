#!/usr/bin/env bash

printf "Creating Swagger Documentation...\n"
php artisan laravel-swagger:generate > storage/swagger/swagger.json
printf "\nCreated Swagger Documentation.\n\n"

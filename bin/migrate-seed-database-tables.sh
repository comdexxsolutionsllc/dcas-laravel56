#!/usr/bin/env bash

php artisan migrate:fresh && php artisan module:migrate && php artisan db:seed && php artisan module:seed

./bin/clear-project-files.sh

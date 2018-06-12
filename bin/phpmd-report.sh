#!/usr/bin/env bash

printf "Creating PHPMD Report...\n"
vendor/bin/phpmd app,config,routes html phpmd-ruleset.xml --exclude /Users/srenner/Code/dcas-laravel55/app/NullProfile.php,/Users/srenner/Code/dcas-laravel55/app/NullUser.php,/Users/srenner/Code/dcas-laravel55/app/Modules/SupportDesk/Models/Null* > public/phpmd.html
printf "\nCreated PHPMD Report.\n\n"

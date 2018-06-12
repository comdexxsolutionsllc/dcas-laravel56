#!/usr/bin/env bash

printf "Creating PHPCS Report...\n"
phpcs -s --standard=phpcs-ruleset.xml
php bin/insert-phpcsxsl-into-xml.php
printf "\nCreated PHPCS Report.\n\n"

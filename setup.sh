#!/bin/bash

rm -rf ./.git && rm -rf ./README.md
composer install -vvv --color=always
cp .env.example .env
php artisan key:generate --ansi
php artisan config:cache
php artisan config:clear
php artisan storage:link
npm install --color=always
npm run dev
echo "Successfully setup!"
rm -rf ./setup.sh

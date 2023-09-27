# !/bin/bash

composer require laravel/ui
php artisan ui bootstrap
npm install
npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps
npm run dev
### Steps to deploy
- cp .env.example .env
- set .env database variables and app_url
- composer install
- npm install
- php artisan key:generate
- php artisan migrate:fresh --seed
- php artisan serve
- npm run dev

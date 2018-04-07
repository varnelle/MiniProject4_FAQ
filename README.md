To Run FAQ Project:

git clone https://github.com/
CD into FAQ and run composer install
cp .env.example to .env
run: php artisan key:generate
setup database / with sqlite or other https://laravel.com/docs/5.6/database
Run: php artisan migrate
Run: unit tests: phpunit
Run: seeds php artisan migrate:refresh --seed
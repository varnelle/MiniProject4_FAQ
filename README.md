To Run FAQ Project:
In Project we learned how to create Edit and Deletes

1.  git clone https://github.com/varnelle/MiniProject4_FAQ
2.  CD into FAQ and run composer install
3.  cp .env.example to .env
4.  run: php artisan key:generate
5.  setup database / with sqlite or other https://laravel.com/docs/5.6/database
6.  Run: php artisan migrate
7.  Run: unit tests: phpunit
8.  Run: seeds php artisan migrate:refresh --seed
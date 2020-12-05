### Instructions:

1. `composer install`
2. `composer update`
3. Rename *.env.example* to *.env*
4. `php artisan key:generate`
5. Create database *todo*
6. Add database credentials to *.env*
7. `php artisan migrate:fresh --seed`
8. `php artisan storage:link`
9. `php artisan serve`

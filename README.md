### Instructions:

cmd `composer install`
cmd `composer update`

rename *.env.example* to *.env*
cmd `php artisan key:generate`

create db *todo*
add db credentials to *.env*

cmd `php artisan migrate:fresh --seed`
cmd `php artisan storage:link`

cmd `php artisan serve`

Personal website code.

Blog powered by: https://github.com/austintoddj/canvas

Development environment:

1) `git clone https://github.com/gclark18/website.git`
2) `composer install`
3) `cp .env.dev .env`
   
4) `php artisan key:generate`
3) `php artisan canvas:install`
4) `php artisan sail:install`
5) `php artisan storage:link`

To start:

`./vendor/bin/sail up`

Artisan commands via scale:

```bash
# Running Artisan commands locally...
php artisan queue:work

# Running Artisan commands within Laravel Sail...
sail artisan queue:work
```

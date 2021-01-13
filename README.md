Personal website code.

Development environment:

1) `git clone https://github.com/gclark18/website.git`
3) `cp .env.dev .env`
2) `alias sail='bash vendor/bin/sail'` (Optional)
2) `sail composer install`
4) `sail artisan key:generate`
5) `sail artisan sail:install`


To start:

`./vendor/bin/sail up`

Artisan commands via sail:

```bash
# Running Artisan commands locally...
php artisan queue:work

# Running Artisan commands within Laravel Sail...
sail artisan queue:work
```

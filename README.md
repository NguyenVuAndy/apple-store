# Web ban san pham Apple
## Huong dan su dung

1. Cai dat laravel vao may
1. Clone project ve may
1. Mo cmd trong folder chua project va bam `composer install`
1. Doi ten file `.env.example` sang `.env`
1. Bam lenh `php artisan key:generate` trong cmd
1. Vao file `.env` va thay doi thong so cho phu hop voi database (project nay su dung mysql)
1. Bam cac lenh `php artisan migrate` `php artisan db:seed` vao cmd
1. Khi chay project thi bam `php artisan serve`, sau do vao web browser, vao `localhost:8000` de chay web.
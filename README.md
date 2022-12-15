
## Langkah Membuat
Alat yang digunakan :
1. Php versi 8.1
2. Laravel versi 8.3
3. MongoDB versi 4.2

Langkah-langkah :
1. Download MongoDB, kemudian install driver mongodb pada windous, dan edit file php.ini.
2. install laravel baru.
```bash
composer create-project --prefer-dist laravel/laravel="^8.0"
```
3. install librari mongodb pada file laravel, karena menggunakan laravel versi 8 maka sesuaikan librarinya disini menggunakan versi 3.8.
```bash
composer require jenssegers/mongodb="^3.8"
```
4. Konfigurasi mongodb untuk laravel.
    - pada file config/app
    ```bash
    Jenssegers\Mongodb\MongodbServiceProvider::class,
    ```
    - pada file config/database, dan ubah default environtmen menjadi mongodb.
    ```bash
    'mongodb' => [
                'driver' => 'mongodb',
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', 27017),
                'database' => env('DB_DATABASE', 'tes'),
                'username' => env('DB_USERNAME', ''),
                'password' => env('DB_PASSWORD', ''),
            ],
    ```
    - pada .env .
    ```bash
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=mahasiswa
    DB_USERNAME=
    DB_PASSWORD=
    ```
5. Setelah itu membuat Model Mahasiswa sekaligus migrate, controller dan resource untuk controller dengan cara dibawah.
```bash
php artisan make:model Mahasiswa -mcr
```
6. Setelah itu konfirurasi semuanya dan lakukan migrate database dengan cara dibawah.
```bash
php artisan migrate
php artisan migrate:fresh
```
7. Setelah itu buat controller untuk CRUD pada controller, dan buat route untuk api pada routes/api.php .

## Cara Menggunakan API

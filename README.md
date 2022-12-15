
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

## Cara Menggunakan API

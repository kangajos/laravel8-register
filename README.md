Cara Install

1. Buat Database baru

2. edit file .env bagian dan sesuaikan dengan database Anda.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_yokesen
DB_USERNAME=user
DB_PASSWORD=password

3. lalu jalankan migration dan seeder dengan perintah:
php artisan migrate --seeder
atau bisa langusung import .sql dalam folder dump-database

4. lalu jalan server, bisa menggunakan artisan atau virtual host yg sudah di arahkan ke folder public dalam projek ini
php artisna serve (jika menggunakan artisan)

5. lalu akses host yg sedang jalan dalam projek ini dan selesai

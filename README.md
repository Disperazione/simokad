<p align="center">
    <img src='https://svgshare.com/i/Xd2.svg' title='Simokad.' />
</p>

## About Simokad
Simokad atau bisa disebut sistem Informasi Akademik adalah Suatu sistem Informasi Akademik yang dibangun untuk memberikan kemudahan kepada pengguna dalam kegiatan administrasi akademik sekolah secara online, seperti pengisian nilai, pembuatan jadwal, serta pengelolaan data guru dan siswa.

### Built With

* [Bootstrap](https://getbootstrap.com)
* [Laravel](https://laravel.com)

## How to Use
1. Clone GitHub repo for this project locally
```
git clone https://github.com/Disperazione/simokad.git
```
2. cd into your project

3. Install Composer Dependencies
```
composer install
```
4. Copy ```.env.example``` file to ```.env``` on the root folder. You can type ```copy .env.example .env``` if using command prompt Windows or ```cp .env.example .env``` if using terminal, Ubuntu

5. Open your ```.env``` file and see the database name ```DB_DATABASE```, create new database on phpMyAdmin as same as the ```.env``` file.
By default, the username is root and you can leave the password field empty.

6. Generate an app encryption key
```
php artisan key:generate
```
7. Migrate and Seed the database
```
php artisan migrate:fresh --seed
```
8. Run
```
php artisan serve
```
9. You can now access your project at ```localhost:8000``` :)

## Credit
- [Laravel Framework](https://laravel.com/)
- [Feather Icons](https://github.com/feathericons/feather)
- [Bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/)

## Contributors ✨
- [Dio Selvinus Silalebit](https://github.com/dioselvinus)
- [Dana Satria](https://github.com/Danasatria)
- [Muchammad Yafik Ramadhani Ilham](https://github.com/yafikramadhan)
- [Alek Sanusi](https://github.com/AlekSanusi)

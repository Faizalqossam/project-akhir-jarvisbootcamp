<h1 align="center"> SISTEM LOWONGAN PEKERJAAN </h1>
<p align="center">Made with</p>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel logo" width="400"></a>
<a href="https://getbootstrap.com" target="_blank"><img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png" alt="Bootstrap logo" width="200"></a></p>
<p align="center"><a href="http://zuramai.github.io/mazer" target="_blank"><img src="https://user-images.githubusercontent.com/45036724/167523601-9d20fb17-1989-488f-b619-cb53c0db8898.png" alt="Mazer Admin" width="500"></a></p>


## How to run
1. Clone this repository 
``` sh
git clone https://github.com/Faizalqossam/Project-Akhir-JarvisBootcamp siloker
```
2. Make database with name "laravel" on your MySQL
3. Copy and Paste commandline below into your terminal
``` sh
cd siloker
composer install
cp .env.example .env
```
4. Set up the .env file if your database connection using different user/password
5. Migrating
``` sh
php artisan migrate:fresh --seed
```
6. Run the server
``` sh
php artisan serve
```


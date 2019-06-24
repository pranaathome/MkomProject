# MkomProject User Manual
Sebuah proyek yang diperuntukkan Magister Ilmu Komputer IPB

## Installasi Admin (web)

create new blank database check .env file
```
$ mkomdb
```

### Run the web  :
1. change directory to folder backend
```
$ cd MkomProject
```
2. install composer to folder backend
```
$ composer install
```
3. setup .env file

4. migrate the database
```
$ php artisan migrate
```
5. run the laravel
```
$ php artisan serve
```
6. open this url in your browser
```
$ http://127.0.0.1:8000/
```

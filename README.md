<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Tugas Pemrograman Berbasis Kerangka Kerja 1 - Laravel Installation, Folder Structure, Blade, and Component

## Nama : Helsa Sriprameswari Putri
## NRP : 5025221154
## Kelas : D

### Required Tools
1. Laravel 11 : versi terbaru dari Laravel, framework PHP
1. Laragon or Laravel Herd : environment untuk menjalankan laravel
2. PHP (version >= 8.2) : pembuatan aplikasi web
3. Composer : dependensi PHP untuk mengelola libraries
4. Tailwind CSS : framework JavaScript untuk menambahkan interaktivitas ke HTML
5. Alphine JS :  framework utility-first untuk membangun interface menggunakan kelas-kelas CSS

## How to Run 
Pada terminal lakukan :
```
php artisan serve
npm run dev
```

## Web Routes
Syntax example : <br>
```
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
```
### Hasil :
![Screenshot 2024-09-10 150931](https://github.com/user-attachments/assets/b115fd1b-cd44-4e3e-80df-661887937854)

### Penjelasan :
<p>Routes mengarahkan pengguna ke halaman berbeda berdasarkan URL yang diakses. Sebagai contoh, ketika pertama kali membuka web, user akan berada pada root ```/``` yang mengarahkan ke halaman `home`. Jika user beralih ke `/about` maka akan diarahkan ke halaman about. </p>





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
<p>Routes mengarahkan pengguna ke halaman berbeda berdasarkan URL yang diakses. Sebagai contoh, ketika pertama kali membuka web, user akan berada pada root (/) yang mengarahkan ke halaman home. Jika user beralih ke /about maka akan diarahkan ke halaman about. </p>

## Component

### How to Make?
```
php artisan make:component ComponentName
```
Akan menghasilkan 2 file, yaitu : 
1. Blade view component file berada di resources/views/components/component-name.blade.php.
2. File class berada di app/View/Components/ComponentName.php.
Jika ingin membuat tanpa clas tambahkan `--view`

### Syntax :
```
<x-component-name></x-component-name>
```

## Navbar 
Navbar digunakan untuk menyediakan tombol untuk navigasi antar halaman atau bagian dalam situs web. Dalam aplikasi web ini, terdapat 4 halaman, yaitu home,blog,about,dan contact. Navbar dibuat menggunakan Tailwind UI.
### Implementasi :
```
<a {{ $attributes }}class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false}}">{{ $slot }}</a>
```

```
 <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
```
### Tampilan :
![Screenshot 2024-09-11 230354](https://github.com/user-attachments/assets/8021c3fc-0dc7-4094-9274-517e054462eb)







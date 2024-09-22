<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Pemrograman Berbasis Kerangka Kerja - Laravel Tutorial

## Nama : Helsa Sriprameswari Putri
## NRP : 5025221154
## Kelas : D

# Part 1 - Laravel Installation, Folder Structure, Blade, and Component

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
### Implementasi : <br>
```
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Helsa Putri', 'title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
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
![Screenshot 2024-09-11 230354](https://github.com/user-attachments/assets/8021c3fc-0dc7-4094-9274-517e054462eb)
Navbar digunakan untuk menyediakan tombol untuk navigasi antar halaman atau bagian dalam situs web. Dalam aplikasi web ini, terdapat 4 halaman, yaitu home,blog,about,dan contact. Navbar dibuat menggunakan Tailwind UI.
### Implementasi :
```
<a {{ $attributes }}class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false}}">{{ $slot }}</a>
```

```
 <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
 <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
 <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
 <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
```
## Header
Komponen header dalam sebuah template web yang menggunakan Tailwind CSS dan Laravel Blade ({{ $slot }})
### Implementasi :
```
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $slot }}</h1>
    </div>
</header>
```
## Home Page

![Screenshot 2024-09-11 232646](https://github.com/user-attachments/assets/5b7e8a9a-16c2-4177-a6df-6902143dcbe8)


Home page berada pada root /. Dalam home page terdapat tiga bagian penting, yaitu :
1. Navbar : Navigasi ke halaman home(/)
2. Header : Berisi judul ($title) yaitu "Home Page"
3. Body : Berisi isi text paragraf pada home page

### Implementasi :

```
<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="text-xl">Welcome to Helsa's Home Page! <3</h3>
  <p>In this home page, you can find some of these menu : </p>
  <ul>
    <li>1. Blog</li>
    <li>2. About</li>
    <li>3. Contact</li>
  </ul>
</x-layout>
```

## Blog Page

![Screenshot 2024-09-11 233504](https://github.com/user-attachments/assets/65b3f4be-ba04-4ab1-ae29-5ff596dd34d9)

Blog page berada pada /blog. Dalam blog page terdapat tiga bagian penting, yaitu :
1. Navbar : Navigasi ke halaman blog(/blog)
2. Header : Berisi judul ($title) yaitu "Blog"
3. Body : Berisi daftar blog dan isinya

### Implementasi :
```
<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="text-xl">Welcome to About Me! <3</h3>
  <p>Hello my name is {{$name}}. I am a third-year undergraduate student majoring in Informatics at Institut Teknologi Sepuluh Nopember. I have a strong interest in web programming and software engineering. With a curious mindset and a passion for learning, I am always eager to expand my knowledge and skills in these fields.</p>
  <img src="{{ asset('img/helsa.png') }}" alt="Helsa" style="width: 200px; height: 200px;">
</x-layout>
```

## About Page

![Screenshot 2024-09-11 233019](https://github.com/user-attachments/assets/a75d78be-9f36-49c3-a29f-78f5cf0baf53)

About page berada pada /about. Dalam about page terdapat tiga bagian penting, yaitu :
1. Navbar : Navigasi ke halaman about(/about)
2. Header : Berisi judul ($title) yaitu "About"
3. Body : Berisi isi text paragraf dan foto pada halaman about

### Implementasi :
```
<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="text-xl">Welcome to About Me! <3</h3>
  <p>Hello my name is {{$name}}. I am a third-year undergraduate student majoring in Informatics at Institut Teknologi Sepuluh Nopember. I have a strong interest in web programming and software engineering. With a curious mindset and a passion for learning, I am always eager to expand my knowledge and skills in these fields.</p>
  <img src="{{ asset('img/helsa.png') }}" alt="Helsa" style="width: 200px; height: 200px;">
</x-layout>
```

## Contact Page
![Screenshot 2024-09-11 234012](https://github.com/user-attachments/assets/e6a20bdc-31a2-44bf-82d2-9911eafd993e)

Contact page berada pada /contact. Dalam contact page terdapat tiga bagian penting, yaitu :
1. Navbar : Navigasi ke halaman contact(/contact)
2. Header : Berisi judul ($title) yaitu "Contact"
3. Body : Berisi list contact

### Implementasi :
```
<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="text-xl">Welcome to Contact Page! <3</h3>
  <p>Please reach out on one of my social media :</p>
</x-layout>
```

## Web Responsivity

![Screenshot 2024-09-11 234341](https://github.com/user-attachments/assets/ca873609-3dc2-47ff-8696-f0d74059c7d0)
![Screenshot 2024-09-11 234426](https://github.com/user-attachments/assets/a01a65d4-005a-4987-beb3-7cc434a2bec6)

# Part 2 - View Data and Model

## Posts

![image](https://github.com/user-attachments/assets/5b1a17ce-e3bf-4ddb-ad0b-a22608dac4cd)

Halaman post berisi list dari semua artikel.

## Models 

Membuat models beranama post.php untuk menyimpan data post. Dalam model tersebut terdapat kelass post berisi function all yang menyimpan data informasi post. Slug digunakan untuk mengidentifikasi judul artikel ke berapa pada halaman blog yang akan digunakan nanti dalam post 1 dan post 2.

```
class Post 
{
public static function all(){
        return [
            [
            'id'=>'1',
            'slug'=>'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Helsa Putri',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat temporibus dicta consectetur necessitatibus asperiores, placeat eum rem id natus, expedita blanditiis aliquam aspernatur porro delectus, fuga architecto? Aliquid, dolore!',
    
            ],} } }
```

## Route
Pada saat user masuk ke halaman post, akan mengembalikan view posts dengan title "Blog" serta posts, yang berisi semua data yang ada di array class post dari model post yang diperoleh melalui Post::all().
```
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog','posts'=>Post::all()]);
});
```

## Post Blade 
Untuk mengisi halaman post yaitu berisi title, author, dan body. Data dari komponen tersebut diperoleh dari array class post yang sudah dibuat.

```
<a href="/posts/{{$post['slug']}}" class="hover:underline">
  <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}</h2>
  </a>
<div class="text-base text-gray-500">
<a href="#">{{$post['author']}}</a> | 3 June 2024
</div>

<p class ="my-4 font-light">{{Str::limit($post['body'],150)}}</p>

<a href="/posts/{{$post['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
```
# Single Post

![image](https://github.com/user-attachments/assets/f960b8ed-26e0-4930-bca7-9ed8ad9df4a0)
![image](https://github.com/user-attachments/assets/4c267db9-bb1d-40b3-92dc-dd3d034d1524)

Single post berisi artikel masing - masing post (artikel 1 dan 2).

## Models 

Terdapat fungsi find untuk mencari halaman post (post berapa) berdasarkan slug.
```
 public static function find($slug): array {
        $post = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;}); }}
```

## Route

Untuk menampilkan masing - masing halaman post. Contohnya halaman http://127.0.0.1:8000/posts/judul-artikel-1 akan halaman artikel 1.
```
Route::get('/posts/{slug}',function($slug)
{
        $post = Post::find($slug);
          return view('post',['title'=>'Single Post', 'post'=> $post]);

});
```

## Post Blade 

Menampilkan informasi/data yang mencakup title,author,body dari  masing-masing halaman post/artikel.
```
<h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}</h2>
<a href="#">{{$post['author']}}</a> | 3 June 2024
<p class ="my-4 font-light">{{($post['body'])}}</p>
<a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
```
# Error Page 

Error page muncul ketika user mencoba masuk ke halaman artikel yang tidak existing.

![image](https://github.com/user-attachments/assets/c00e94a6-6a83-4f47-b03a-6e376339f387)

## Models

Jika halaman artikel tidak ditemukan, page akan menampilkan pesan error 404.
```
 if(! $post) {
            abort(404);
        }
```

# Part 3 -  Database & Migration AND Eloquent ORM & Post Model

# Database & Migration

## Connecting SQLite to TablePlus

Dalam file .env set jadi :
```
DB_CONNECTION=sqlite
```
Membuat connection di TablePlus dengan menghubungkan connection ke

C:\laragon\www\laravel11\database\database.sqlite 

![image](https://github.com/user-attachments/assets/85c66aae-dd7f-4051-bd9a-9dc44c0e5bfe)

Run migration untuk create table :

```
php artisan migrate
```

![image](https://github.com/user-attachments/assets/91393711-dbcb-47ac-a6ea-6646d4c277a9)

Jika ingin menghubungkan ke mysql bisa juga dengan setting port,username,database dll.

## Making Migration of Posts Table

```
php artisan make :: migration
create_posts_table
```

Buat entitasnya :

```
Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('slug')->unique();
            $table->string('body');
            $table->timestamps();
        });
```

![image](https://github.com/user-attachments/assets/2b274059-0a1c-4412-ab9e-3c342516174a)

Jika ingin Re-migrate

```
php artisan migrate::fresh
php artisan migrate
```

# Eloquent ORM & Post Model

## Updating post model 
mewarisi model yang ada dalam laravel

```

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
```

Jika mau mengubah slug menjadi id bisa dengan binding

```
Route::get('/posts/{post:id}',function(Post $id)
{
   

       $post = Post::find($id); } 

 ```

 Bisa juga tetap pakai slug 

```
 Route::get('/posts/{post:slug}',function(Post $post)
{

            return view('post',['title'=>'Single Post', 'post'=> $post]);

});

```

## Inserting data to row with PHP Tinker

Pada terminal :
```
php artisan tinker
```

```
App\Models\Post::create([
'title' => 'Judul Tulisan 1',
'author'=> 'Helsa Putri',
'slug' => 'judul-tulisan-1',
'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat aliquid tempora dolorem illo sed quaerat impedit, odio repudiandae dicta molestias, amet iure labore voluptatibus? Odio soluta obcaecati ab deserunt dolorem.'
]);
```

![image](https://github.com/user-attachments/assets/13744c07-2342-49ad-b16b-f6e46e87de52)

![Screenshot (582)](https://github.com/user-attachments/assets/21ae8586-d723-4637-bc7a-93d5a6c2be5b)
![Screenshot (583)](https://github.com/user-attachments/assets/2e605f39-b49e-46cb-bc84-9d9c715bbaf1)
![Screenshot (584)](https://github.com/user-attachments/assets/08be888f-f2cd-4634-b356-40d7057066c4)

## Customizing Time

Jadi user bisa lihat kapan terakhir update
```

{{$post->created_at->diffForHumans()}}

```

## Making 5 Customized Blogs


![Screenshot (585)](https://github.com/user-attachments/assets/39424d28-14c5-431f-89ac-ab6369d27acd)

![Screenshot (586)](https://github.com/user-attachments/assets/a5e04917-1375-482c-97aa-b7cc84f58ecd)


```
php artisan tinker

```


```
App\Models\Post::create([
'title' => 'Komputasi Awan: Solusi Penyimpanan dan Pemrosesan Data Modern',
'author'=> 'Helsa Putri',
'slug' => 'judul-blog-5',
'body' => 'Komputasi awan telah menjadi tulang punggung bagi banyak layanan digital saat ini. Dengan cloud computing, perusahaan tidak lagi perlu mengelola infrastruktur fisik yang kompleks untuk penyimpanan dan pemrosesan data. Layanan seperti AWS, Google Cloud, dan Microsoft Azure menawarkan skalabilitas, keamanan, dan fleksibilitas yang memungkinkan bisnis untuk fokus pada inovasi tanpa khawatir tentang infrastruktur.'
]);

```
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

# Part 3 - Database & Migration AND Eloquent ORM & Post Model
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

# Part 4 - Model Factories, Eloquent Relationship, Post Category, and Database Seeder

![Screenshot (594)](https://github.com/user-attachments/assets/0fa1ab24-e2f3-43a7-a680-fd4a96708567)
![image](https://github.com/user-attachments/assets/b139ca4f-6a70-4997-a618-0680574c43bb)


# Generating Dummy Data with Factories

Dalam halaman blog, membuat 200 data secara auto dengan model factories.

## Making new factory

```
php artisan make:factory
PostFactory
```

Dalam PostFactory.php :

Import :
```
use Illuminate\Database\Eloquent\Factories\Factory;
```
```
 public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'author'=>fake()->name(),
            'slug' => Str::slug(fake() -> sentence()),
            'body'=> fake()->text()

        ]; }
```
Membuat array yang berisi title,author,slug,body yang akan diisi atau digenerate datanya nanti.

## Creating dummy data with tinker

Jika ingin customized data sesuai negara Indonesia bisa diset dalam .env menjadi :

```
APP_FAKER_LOCALE=id_ID
```

Masuk ke tinker :
```
php artisan tinker
```
```
App\Models\Post:factory(200)->create();
```

200 dummy data blog akan tergenerate.

# Eloquent Relationship

## Menghubungkan dua tabel, yaitu users dan post 
```
 $table -> foreignId('author_id')->constrained(
                table: 'users',
                indexName : 'posts_author_id'
            );
```

Dalam migrations create posts, menambahkan constraint foreign key di table posts, yaitu author_id yang berhubungan dengan id di tabel users.

## Generate data users dan posts

Database dibuat agar setiap author/user memiliki beberapa posts. Dalam model Post tambahkan :

```
php artisan serve
```

```
App\Models\Post::factory(100)->recycle(User::factory(5))->create())->create();
```

Artinya akan generate data yang hanya ada 5 authors dengan total 100 posts. Agar dari post yang ada kita bisa tahu data authornya maka membuat fungsi : 


```
 public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }
```

## Fixing UI

![image](https://github.com/user-attachments/assets/0d3a7995-3d60-4153-98b8-e9ed8db2b0f4)
![image](https://github.com/user-attachments/assets/5980b169-5ae3-4eb8-a351-a775feef1c8f)
![image](https://github.com/user-attachments/assets/cf9a877c-d952-42ba-aea5-22a3f37fbc57)


Dalam halaman blog, user dapat mengkategorikan list post sesuai usernya. Jika user click nama authornya, website akan menampilkan "authors by *nama*" sesuai authornya. Di bawah title blog, terdapat juga tulisan by author in framework programming.

Updating Route : 
```
Route::get('/authors/{user}',function(User $user)
{

            return view('posts',['title'=>'Articles by ' . $user->name, 'posts'=> $user->posts]);

});
```

Updating Post blade
```
By  
<a href="/authors/{{$post->author->id}}" class="hover:underline">{{$post->author->name}}</a> 
in <a href="#">Framework Programming </a>| {{$post->created_at->diffForHumans()}}
</div>
```

# Post Category

Dalam part ini akan membuat agar dapat menampilkan posts sesuai category.

Membuat migration, model, dan factory category 

```
php artisan make:model Category -mf
```
## Migrations 
Membuat entitas yang ada di tabel category pada migrations dengan foreign key yang menghubungkan category id

```
 Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique;
            $table->timestamps();
        });
```
Pada migrations posts:
```
  $table -> foreignId('category_id')->constrained(
                table: 'categories',
                indexName : 'posts_category_id'
            );
```
## Models

Menghubungkan category dengan posts dimana suatu category dapat memiliki banyak posts.

Category model :

```
 public function posts() : HasMany {
    return $this -> hasMany(Post::class);
    }
```

Posts model : 

```
public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
```

## Factories

Untuk generate dummy data category nantinya 
```
 return [
            'name'=> fake()->sentence(rand(1,2),false),
            'slug'=> Str::slug(fake()->sentence(rand(1,2),false)),
        ];
```
## Generating Categories Data
```
App\Models\Post::factory(100)->recycle([Category:factory(3)->create(), User::factory(5)->create()]) -> create();
```

Laravel akan mengenerate 3 categories dengan 5 authors

## UI

![image](https://github.com/user-attachments/assets/96bff86e-517a-4517-b8ba-75a0c746d20b)
![image](https://github.com/user-attachments/assets/7abcd749-db93-4ec3-8320-f442fde7a8b7)

Halaman web bisa menampilkan keterangan post dengan category nya. Jika nama category diklik, maka akan menampilkan nama kategori tersebut dan jumlah postnya

Adding Route :
```
Route::get('/categories/{category:slug}',function(Category $category)
{

            return view('posts',['title'=> 'Articles in : ' . $category->name, 'posts'=> $category->posts]);

});
```
# Database Seeder

Membuat seeder agar dapat memasukkan data lebih mudah dan sesuai keinginan kita

```
php artisan make:seeder
```

## User Seeder
```
 User::create([
            'name' => 'Helsa Putri',
            'username'=> 'helsasp',
           'email' => 'helsasp@gmail.com',
               'email_verified_at'=> now(),
               'password'=> Hash::make('password'),
               'remember_token'=>Str::random(10)
          ]);
        User::factory(5)->create();
```

Membuat user seeder untuk menambahkan author sesuai data kita pribadi

## Category Seeder
```
 Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
```

Membuat category seeder untuk menambahkan nama category sesuai yang kita mau

## Database Seeder

```
$this->call([CategorySeeder::class, UserSeeder::class]);
      Post::factory(100)->recycle([
       Category::all(),
       User::all()
      ])->create();
```

Database seeder dibuat dengan memanggil category dan user seeder yang telah dibuat. Menggunakan factory agar bisa mengenerate 100 data dengan recycle.


## UI

![image](https://github.com/user-attachments/assets/827843dd-e885-4487-803a-8543f8a3b4dc)
![image](https://github.com/user-attachments/assets/f477ece4-3063-424a-bd1a-40245bde8ede)
![image](https://github.com/user-attachments/assets/50e38ba5-bf26-4274-9a17-1358e45a4e4b)

Website dapat menampilkan list blog yang sudah dikelompokkan berdasarkan nama category yang telah kita buat di seeder tadi.

# Part 5 - N + 1 Problem, Redesign UI, Searching, Pagination

# N + 1 Problem

Dengan data yang sudah diinsert sebelumnya, looping query dilakukan berkali - kali hingga terbentuk banyak sekali query sejumlah 2n + 1. Agar query lebih efektif, dapat menggunakan eager loading dalam laravel.

# Eager Loading by Default
```
protected $with = ['author', 'category'];
```

To prevent lazy loading tambahkan method di AppServiceProvider :
```
 public function boot(): void
    {
        Model::preventLazyLoading();
    }
```

![image](https://github.com/user-attachments/assets/2e14d198-003f-4193-8260-22750ae88d26)
![image](https://github.com/user-attachments/assets/f32d96fb-330d-4d61-9fe3-20490ef30ab4)


Dengan eager loading, query yang sebelumnya berjumlah sangat besar di angka 200 menjadi lebih efektif jumlahnya jadi 6/7.

# Redesign UI

## Using flowbite as UI template

```
npm install -D flowbite
```
In tailwind.config.js add plugins :
```
require('flowbite/plugin')
```

# Posts UI

![image](https://github.com/user-attachments/assets/b9134a6b-5ad8-445f-8c9c-e55ba9104b59)
![image](https://github.com/user-attachments/assets/0e852bd3-70a0-4917-8981-87c7d3f579be)

Menggunakan blog sections yang ada di flowbite. Caranya adalah copy code nya lalu di implementasikan di posts.blade. Data ditampilkan dengan memanggil $post->category->name, $post -> author->name, dan lainnya. Setiap categori dikelompokkan berdasarkan warna dengan konfigurasi safelist di tailwind.config.js :

```
 safelist : ["bg-red-100", "bg-green-100", "bg-yellow-100", "bg-blue-100"]
```

Jika nama category diklik maka akan perpindah ke halaman yang menunjukkan post dengan category yang sama (group by category)

# Single Post UI
![image](https://github.com/user-attachments/assets/1d555b6b-fa06-4102-974f-c95c14f5e432)

Menggunakan blog templates yang ada di flowbite diimplementasikan di post.blade.php. Halaman akan menunjukan data yang berisi judul,author dll yang dipanggil dari $post -> title dan lainnya. Jika diklik back to posts, akan kembali ke halaman posts. Konfigurasi di tailwind.config.js add plugins :
```
require('flowbite-typography')
```
# Searching

![image](https://github.com/user-attachments/assets/4a27e4a4-ba2c-4bca-9bc1-f542949ee515)

Mengganti icon search dengan icon yang ada di flowbite. Untuk mengimplementasikan fungsi search, akan digunakan query builder.

## Query Builder

```
 public function scopeFilter (Builder $query, array $filters): void {

        $query->when(
            $filters['search'] ?? false, 
            fn ($query, $search) => 
            $query->where ('title', 'like', '%' . $search . '%')
        )
      ; }
```

Fungsi tersebut digunakan untuk memfilter suatu title pada bagian searching blog. Selain itu, juga membuat filter berdasarkan category dan author. Jika array tidak kosong, maka akan memfilter melalui query yang ada.

## Updating Route

```
Route::get('/posts', function () {

 
    return view('posts', ['title' => 'Blog','posts'=>Post::filter(request(['search', 'category','author']))->latest()->get()]);

});
```

Route akan mengembalikan view sesuai filter yang sudah dibuat tadi,

```
  @if(request('category'))
            <input type="hidden" name="category" value ="{{ request('category')}}">
            @endif
```

Jika terdapat request filter berdasar category maupun authornya, post dengan category atau author yang tidak sesuai akan diset hidden.

## Not Found

![image](https://github.com/user-attachments/assets/dd1b2d90-2543-4339-b81c-4e73ff79980b)

Jika blog tidak ditemukan, akan menampilkan tulisan article not found.

```
@empty
<div>
<p class="font-semibold text-xl my-4">Article Not Found!</p>
<a href="/posts" class ="block text-blue-600 hover:underline"> &laquo; Back to all posts</a>

</div>
```
## Query

![image](https://github.com/user-attachments/assets/0161bf22-3fb8-4966-8f41-9722578c469a)

# Pagination

![image](https://github.com/user-attachments/assets/90a97ddd-1c52-492c-b152-8279089d4092)
![image](https://github.com/user-attachments/assets/2274a612-d353-4bcd-8017-27fd60a4d565)
![image](https://github.com/user-attachments/assets/d9b5d460-8c22-41f4-bbe1-8d42a4d0cd5d)

Dengan pagination yang ada di laravel, blog akan dikelompokkan per page sesuai banyak post yang diinginkan developer. Pagination juga mengelompokkan berdasarkan category dan authornya.

Configuration in Laravel (content) :
```
"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
```

Dalam router posts :
```
 return view('posts', ['title' => 'Blog','posts'=>Post::filter(request(['search', 'category','author']))->latest()->paginate(9)->withQueryString()]);
 ```

 Bisa juga menggunakan simplepaginate jika ingin ada previous dan nextnya.

 Dalam view post blade :
 ```
   {{ $posts->links()}}
 ```

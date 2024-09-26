<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

       

       // Category::create([
         //   'name'=>'Web Design',
           // 'slug'=>'web-design'
        //]);

        //Post::create([
          //  'title'=> 'Judul Artikel 1',
           // 'author_id'=> 1,
            //'category_id'=>1,
           // 'slug' => 'judul-artikel-1',
           // 'body'=> 'Once you have defined your factories, you may use the static factory method provided to your models by the Illuminate\Database\Eloquent\Factories\HasFactory trait in order to instantiate a factory instance for that model.'
      //  ]);

    $this->call([CategorySeeder::class, UserSeeder::class]);
      Post::factory(100)->recycle([
       Category::all(),
       User::all()
      ])->create();
    }
}

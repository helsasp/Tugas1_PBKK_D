<?php 

namespace APP\Models;
use Illuminate\Support\Arr;

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
    
            ],
    
            [
                'id'=>'2',
                'slug'=>'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Helsa Putri',
                'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat temporibus dicta consectetur necessitatibus asperiores, placeat eum rem id natus, expedita blanditiis aliquam aspernatur porro delectus, fuga architecto? Aliquid, dolore!',
        
             ]
    
            ];
    }

    public static function find($slug): array {


        $post = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;});

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}

<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" =>"home"

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Erul",
        "email" => "rkhaerul@gmail.com",
        "image" => "erul.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
    
];
    return view('posts', [
        "title" => " Posts",
        "posts" => Post::all()
    ]);
});

// halam singel post
Route::get('posts/{slug}', function($slug) { 
    

    // $new_post = [];
    // foreach($posts as $post){
    //     if($post["slug"] === $slug ) {
    //         $new_post = $post;
            
    //     } 
    // }


    return view('post', [
        "title" => "Single post",
        "post" => Post::find($slug)

    ]);
});
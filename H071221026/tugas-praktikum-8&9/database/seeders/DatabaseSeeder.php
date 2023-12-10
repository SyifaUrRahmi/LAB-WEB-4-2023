<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'Fail Fudhayl',
            'email'=> 'fudhayl@gmail.com',
            'password'=> bcrypt('12345')
        ]);

        User::create([
            'name'=> 'Kelvin Leonardo',
            'email'=> 'kelvin@gmail.com',
            'password'=> bcrypt('2wsdr5')
        ]);

        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'Web-Programming'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::create([
            'title'=> 'Tutor Python',
            'category_id'=>1,
            'user_id'=>1,
            'slug'=> 'tutor-python',
            'except'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien.',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Magna eget est lorem ipsum dolor sit. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Non tellus orci ac auctor. Aliquet eget sit amet tellus cras.</p><p>Sed augue lacus viverra vitae. Dictum fusce ut placerat orci nulla. Neque vitae tempus quam pellentesque nec nam aliquam. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Condimentum id venenatis a condimentum vitae. Sed faucibus turpis in eu mi bibendum neque egestas. Augue ut lectus arcu bibendum. Nibh venenatis cras sed felis.</p><p>Ornare aenean euismod elementum nisi quis. Iaculis at erat pellentesque adipiscing. Adipiscing elit ut aliquam purus sit amet. Porta nibh venenatis cras sed felis eget velit. Turpis egestas maecenas pharetra convallis posuere. Massa tempor nec feugiat nisl pretium. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Tincidunt arcu non sodales neque sodales ut etiam sit amet. Venenatis tellus in metus vulputate. Molestie a iaculis at erat pellentesque adipiscing commodo elit.</p>'
        ]);

        Post::create([
            'title'=> 'Tutor Java',
            'category_id'=>1,
            'user_id'=>1,
            'slug'=> 'tutor-java',
            'except'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien.',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Magna eget est lorem ipsum dolor sit. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Non tellus orci ac auctor. Aliquet eget sit amet tellus cras.</p><p>Sed augue lacus viverra vitae. Dictum fusce ut placerat orci nulla. Neque vitae tempus quam pellentesque nec nam aliquam. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Condimentum id venenatis a condimentum vitae. Sed faucibus turpis in eu mi bibendum neque egestas. Augue ut lectus arcu bibendum. Nibh venenatis cras sed felis.</p><p>Ornare aenean euismod elementum nisi quis. Iaculis at erat pellentesque adipiscing. Adipiscing elit ut aliquam purus sit amet. Porta nibh venenatis cras sed felis eget velit. Turpis egestas maecenas pharetra convallis posuere. Massa tempor nec feugiat nisl pretium. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Tincidunt arcu non sodales neque sodales ut etiam sit amet. Venenatis tellus in metus vulputate. Molestie a iaculis at erat pellentesque adipiscing commodo elit.</p>'
        ]);

        Post::create([
            'title'=> 'Kisah Hidup',
            'category_id'=>2,
            'user_id'=>1,
            'slug'=> 'kisah-hidup',
            'except'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien.',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Magna eget est lorem ipsum dolor sit. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Non tellus orci ac auctor. Aliquet eget sit amet tellus cras.</p><p>Sed augue lacus viverra vitae. Dictum fusce ut placerat orci nulla. Neque vitae tempus quam pellentesque nec nam aliquam. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Condimentum id venenatis a condimentum vitae. Sed faucibus turpis in eu mi bibendum neque egestas. Augue ut lectus arcu bibendum. Nibh venenatis cras sed felis.</p><p>Ornare aenean euismod elementum nisi quis. Iaculis at erat pellentesque adipiscing. Adipiscing elit ut aliquam purus sit amet. Porta nibh venenatis cras sed felis eget velit. Turpis egestas maecenas pharetra convallis posuere. Massa tempor nec feugiat nisl pretium. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Tincidunt arcu non sodales neque sodales ut etiam sit amet. Venenatis tellus in metus vulputate. Molestie a iaculis at erat pellentesque adipiscing commodo elit.</p>'
        ]);

        Post::create([
            'title'=> 'Kisah Kelam',
            'category_id'=>2,
            'user_id'=>2,
            'slug'=> 'kisah-kelam',
            'except'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien.',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper eget duis at tellus at urna condimentum. Sit amet massa vitae tortor condimentum lacinia quis vel. Scelerisque eleifend donec pretium vulputate sapien. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Magna eget est lorem ipsum dolor sit. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Non tellus orci ac auctor. Aliquet eget sit amet tellus cras.</p><p>Sed augue lacus viverra vitae. Dictum fusce ut placerat orci nulla. Neque vitae tempus quam pellentesque nec nam aliquam. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Condimentum id venenatis a condimentum vitae. Sed faucibus turpis in eu mi bibendum neque egestas. Augue ut lectus arcu bibendum. Nibh venenatis cras sed felis.</p><p>Ornare aenean euismod elementum nisi quis. Iaculis at erat pellentesque adipiscing. Adipiscing elit ut aliquam purus sit amet. Porta nibh venenatis cras sed felis eget velit. Turpis egestas maecenas pharetra convallis posuere. Massa tempor nec feugiat nisl pretium. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Tincidunt arcu non sodales neque sodales ut etiam sit amet. Venenatis tellus in metus vulputate. Molestie a iaculis at erat pellentesque adipiscing commodo elit.</p>'
        ]);
    }
}

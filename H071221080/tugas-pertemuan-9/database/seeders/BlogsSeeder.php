<?php

namespace Database\Seeders;

use App\Models\Blogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Mata', 'Gigi', 'Kulit', 'Konsumsi', 'Mental'];
        for ($i = 1; $i <= 20; $i++) {
            Blogs::insert([
                'title' => fake()->sentence(),
                'body' => fake()->paragraph(20),
                'category' => fake()->randomElement($categories),
                'author' => fake()->email(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

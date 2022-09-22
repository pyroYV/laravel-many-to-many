<?php

use App\Model\Post;
use App\Model\tag;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $randomTags = tag::inRandomOrder()->limit(2)->get();
            $post->tags()->attach($randomTags);
        }
    }
}

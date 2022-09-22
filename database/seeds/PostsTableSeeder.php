<?php

use App\User;
use App\Model\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        for ($i=0; $i < 20; $i++) {
            $newPost = new Post();
            $newPost->post_title = $faker->realText(20);
            $newPost->user_id = $faker->randomElement($users)->id;
            $newPost->post_author = $faker->name();
            $newPost->post_content = $faker->paragraph(4);
            $newPost->post_creation_date = $faker->dateTimeThisYear();
            $newPost->post_image = $faker->imageUrl();
            $newPost->save();
        }
    }
}

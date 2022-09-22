<?php

use App\Model\tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class tags_table_seeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags = [
            'salute',
            'cultura',
            'sport',
            'politica',
            'cronaca',
            'esteri',
            'english',
            'scuola'
        ];

        foreach ($tags as $tag) {
            $newTag = new tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}

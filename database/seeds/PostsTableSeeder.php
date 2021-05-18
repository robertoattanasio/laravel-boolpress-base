<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $posts = [
    //         [
    //             'title' => 'Pippo',
    //             'author' => 'Paperino',
    //             'main_post' => 'ciao belli'
    //         ]];

    //         foreach ($posts as $post) {
    //             $new_post = new Post();

    //             $new_post->title = $post['title'];
    //             $new_post->author = $post['author'];
    //             $new_post->main_post = $post['main_post'];

    //             $new_post->save();
    //         }
    // }

    public function run(Faker $faker)
    {
    for ($i = 1; $i < 100; $i++){
        $newPost = new Post();
        $newPost->title = $faker->sentence(2);
        $newPost->author = $faker->name();
        $newPost->main_post = $faker->paragraph(10);

        $newPost->save();
        }
    }
}
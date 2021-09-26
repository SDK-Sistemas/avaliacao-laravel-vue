<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory()
                     ->count(50)
                     ->create();

        /**
         * Tags
         */
        $tagVue = Tag::firstWhere('name', 'vue');

        foreach ($posts->take(10) as $post){
            DB::table('post_tag')->insert([
              'post_id' => $post->id,
              'tag_id' => $tagVue->id
            ]);
        }

        $tags = Tag::where('name', '!=', 'vue')->get();

        foreach ($posts as $post){
            DB::table('post_tag')->insert([
              'post_id' => $post->id,
              'tag_id' => $tags->random()->id
            ]);
        }
    }
}

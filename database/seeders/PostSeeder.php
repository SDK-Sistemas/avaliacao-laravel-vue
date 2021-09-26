<?php

namespace Database\Seeders;

use App\Models\Comentario;
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

        $tags = Tag::all();

        foreach ($posts as $post){
            /** Tags */
            DB::table('post_tag')->insert([
              'post_id' => $post->id,
              'tag_id' => $tags->random()->id
            ]);
            /** Comentários */
            Comentario::factory()->count(random_int(1,5))->create(['post_id' => $post->id]);
        }
    }
}

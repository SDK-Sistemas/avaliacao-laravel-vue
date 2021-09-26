<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        return view('welcome', [
            'tags' => Tag::all()
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return Response
     */
    public function show(Post $post)
    {
        //
    }


    /**
     * Likes + 1
     * @param Post $post
     * @return JsonResponse|Response
     */
    public function like(Post $post)
    {
        try {
            $post->increment('likes');
            return response()->noContent();
        }catch (Throwable $throwable){
            return  response()->json($throwable->getMessage(), 500);
        }
    }

    /**
     * Likes - 1
     * @param Post $post
     * @return JsonResponse|Response
     */
    public function dislike(Post $post)
    {
        try {
            $post->decrement('likes');
            return response()->noContent();
        }catch (Throwable $throwable){
            return  response()->json($throwable->getMessage(), 500);
        }
    }
}

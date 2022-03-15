<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(private PostService $postService)
    {
    }

    public function postList(): \Illuminate\Contracts\View\View
    {
        $posts = $this->postService->getWithPaginate(queries: [
            ['published_at', '<', now()]
        ], with: ['user']);

        return view('post-list', compact('posts'));
    }

    public function postDetail(Post $post, $postSLug): \Illuminate\Contracts\View\View
    {
        $posts = $this->postService->getWithPaginate(queries: [
            ['published_at', '<', now()],
            ['id', '!=', $post->id]
        ], with:['user'], perPage: 3);

        return view('post-detail', compact('post', 'posts'));
    }
}

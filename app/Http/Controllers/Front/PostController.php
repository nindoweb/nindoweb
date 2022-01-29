<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\Front\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(private PostService $postService)
    {
    }

    public function PostList(): \Illuminate\Contracts\View\View
    {
        $posts = $this->postService->getWithPaginate(queries: [
            ['published_at', '>', now()]
        ]);

        return view('front.posts.post_list', compact('posts'));
    }

    public function PostDetail(Post $post, $postSLug): \Illuminate\Contracts\View\View
    {
        return view('front.posts.post_detail', compact('post'));
    }
}

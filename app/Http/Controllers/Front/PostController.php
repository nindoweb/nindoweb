<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(private PostService $postService)
    {
    }

    public function PostList()
    {

    }

    public function PostDetail()
    {

    }
}

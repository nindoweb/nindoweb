<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\PostService;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function __construct(private PostService $postService)
    {
    }

    public function index(): \Illuminate\Http\Response
    {
        return response()
            ->view('front.sitemap.index')
            ->header('Content-Type', 'text/xml');
    }

    public function posts(): \Illuminate\Http\Response
    {
        $posts = $this->postService->get();

        return response()
            ->view('front.sitemap.posts', compact('posts'))
            ->header('Content-Type', 'text/xml');
    }
}

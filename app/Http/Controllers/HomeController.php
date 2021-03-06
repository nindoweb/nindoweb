<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Services\ServiceService;

class HomeController extends Controller
{
    public function __construct(private PostService $postService,
                                private ServiceService $serviceService)
    {
    }

    public function home(): \Illuminate\Contracts\View\View
    {
        $posts = $this->postService->getWithPaginate(queries: [
            ['published_at', '<', now()]
        ], with: ['user'], perPage: 3);
        $services = $this->serviceService->getWithPaginate(with: ['technologies'], perPage: 3);

        return view('home', compact(
            'posts',
            'services'));
    }
}

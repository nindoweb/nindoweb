<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\PostService;
use App\Services\Front\ServiceService;
use App\Services\Front\TechnologyService;

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

        return view('front.home', compact(
            'posts',
            'services'));
    }
}

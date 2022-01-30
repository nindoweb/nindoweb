<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\PostService;
use App\Services\Front\ServiceService;
use App\Services\Front\TechnologyService;

class HomeController extends Controller
{
    public function __construct(private TechnologyService $technologyService,
                                private PostService $postService,
                                private ServiceService $serviceService)
    {
    }

    public function home(): \Illuminate\Contracts\View\View
    {
        $posts = $this->postService->getWithPaginate(queries: [
            ['published_at', '>', now()]
        ], perPage: 3);
        $technologies = $this->technologyService->get();
        $services = $this->serviceService->getWithPaginate(perPage: 3);

        return view('front.home', compact(
            'posts',
            'technologies',
            'services'));
    }
}

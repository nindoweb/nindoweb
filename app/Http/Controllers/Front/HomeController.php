<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\PostService;
use App\Services\Front\ProjectService;
use App\Services\Front\ServiceService;
use App\Services\Front\TechnologyService;

class HomeController extends Controller
{
    public function __construct(private TechnologyService $technologyService,
                                private PostService $postService,
                                private ServiceService $serviceService,
                                private ProjectService $projectService)
    {
    }

    public function home(): \Illuminate\Contracts\View\View
    {
        $posts = $this->postService->getWithPaginate(perPage: 3);
        $technologies = $this->technologyService->get();
        $services = $this->serviceService->getWithPaginate(perPage: 3);
        $projects = $this->projectService->getWithPaginate(perPage: 3);

        return view('front.home', compact(
            'posts',
            'technologies',
            'services',
            'projects'));
    }
}

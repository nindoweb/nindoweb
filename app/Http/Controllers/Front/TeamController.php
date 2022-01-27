<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\UserService;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct(private UserService $userService)
    {
    }

    public function teams(): \Illuminate\Contracts\View\View
    {
        return view('front.teams');
    }
}

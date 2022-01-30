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

    public function index(): \Illuminate\Contracts\View\View
    {
        $users = $this->userService->getWithPaginate(queries: [
            ['team_id', '!=', null]
        ]);

        return view('front.teams.index', compact('users'));
    }
}

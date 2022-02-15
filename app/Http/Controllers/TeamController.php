<?php

namespace App\Http\Controllers;

use App\Services\UserService;

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

        return view('teams', compact('users'));
    }
}

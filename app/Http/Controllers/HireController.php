<?php

namespace App\Http\Controllers;


class HireController extends Controller
{

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('hiring');
    }
}

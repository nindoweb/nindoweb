<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use Illuminate\Http\Request;

class HireController extends Controller
{

    public function create()
    {
        return view('front.hiring.create');
    }

    public function store(Request $request)
    {
        //
    }

}

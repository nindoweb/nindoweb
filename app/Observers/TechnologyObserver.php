<?php


namespace App\Observers;


use App\Models\Technology;

class TechnologyObserver
{
    public function creating(Technology $technology)
    {
        $technology->user_id = auth()->user()->id;
    }
}

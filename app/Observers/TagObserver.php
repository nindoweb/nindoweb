<?php


namespace App\Observers;



use App\Models\Tag;

class TagObserver
{
    public function creating(Tag $tag)
    {
        $tag->user_id = auth()->user()->id;
    }
}

<?php


namespace App\Observers;


use App\Models\RequestFormNote;

class RequestFormNoteObserver
{
    public function creating(RequestFormNote $requestFormNote)
    {
        $requestFormNote->user_id = auth()->user()->id;
    }
}

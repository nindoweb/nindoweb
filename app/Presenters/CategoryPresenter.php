<?php


namespace App\Presenters;


trait CategoryPresenter
{
    public function setCodeAttribute()
    {
        $this->attributes['code'] = uniqid();
    }
}

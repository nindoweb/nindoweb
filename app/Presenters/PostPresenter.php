<?php


namespace App\Presenters;


trait PostPresenter
{
    public function setCodeAttribute(): string
    {
        return $this->attributes['code'] = uniqid();
    }
}

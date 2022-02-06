<?php


namespace App\Observers;


use App\Models\Service;

class ServiceObserver
{
    public function creating(Service $service)
    {
        $service->code = uniqid();
    }
}

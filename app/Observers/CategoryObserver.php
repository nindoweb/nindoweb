<?php


namespace App\Observers;


use App\Models\Category;

class CategoryObserver
{
    public function creating(Category $category)
    {
        $category->user_id = auth()->user()->id;
        $category->code = uniqid();
    }
}

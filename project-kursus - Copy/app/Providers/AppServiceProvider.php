<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Course;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share courses data with all views
        $courses = Course::all();
        view()->share('courses', $courses);
    }
}


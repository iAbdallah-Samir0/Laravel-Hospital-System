<?php

namespace App\Providers;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Repository\Sections\SectionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(SectionRepositoryInterface::class,  SectionRepository::class);
    }


    public function boot(): void
    {
        //
    }
}

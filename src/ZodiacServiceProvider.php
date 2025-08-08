<?php

namespace Merveyilmaz\BirthdayCalculation;

use Illuminate\Support\ServiceProvider;

class ZodiacServiceProvider extends ServiceProvider
{
    public function register()
    {
      $this->commands([
        \Merveyilmaz\BirthdayCalculation\Console\ZodiacCommand::class,
      ]);
    }

    public function boot()
    {
      
    }
}
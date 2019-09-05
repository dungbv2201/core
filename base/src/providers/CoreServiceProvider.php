<?php

namespace Dung\Core\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../resource/views', 'dung-core');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'dung-core');
    }
}

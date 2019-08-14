<?php

namespace CheweiHu\LaravelAuthTheme;

use Illuminate\Support\ServiceProvider;

class LaravelAuthThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            // Views
            __DIR__.'/../resources/views/vendor/adminlte/login.blade.php' => resource_path('views/vendor/adminlte/login.blade.php'),
            __DIR__.'/../resources/views/vendor/adminlte/register.blade.php' => resource_path('views/vendor/adminlte/register.blade.php'),
        ], 'theme-adminlte');

        $this->publishes([
            // Translations
            __DIR__.'/../resources/lang/en/auth-theme.php' => resource_path('lang/en/auth-theme.php'),
        ], 'theme-trans-en');

        $this->publishes([
            // Translations
            __DIR__.'/../resources/lang/zh-TW/auth-theme.php' => resource_path('lang/zh-TW/auth-theme.php'),
        ], 'theme-trans-zh-TW');
    }
}

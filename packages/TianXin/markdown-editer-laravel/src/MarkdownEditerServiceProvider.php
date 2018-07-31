<?php

namespace TianXin\MarkdownEditer;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MarkdownEditerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //启动boot配置
        $this->publishes([__DIR__.'/.../public/'=>public_path('')]);//注册公共资源

        $this->publishes([__DIR__.'/../config/editormd.php'=>config_path('editormd.php')]);//注册配置文件


        if (!$this->app->routesAreCached()) {
            Route::post('/upload/editormd/image','TianXin\MarkdownEditer\Controllers\MarkdownEditerController@uploadimage');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}

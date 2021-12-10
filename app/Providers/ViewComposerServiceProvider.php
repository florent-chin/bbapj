<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use View;
class ViewComposerServiceProvider extends ServiceProvider
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
        View::composer('update.blade.php', \App\Http\ViewComposers\HogeComposer::class);
        View::composer('news.*', \App\Http\ViewComposers\NewsComposer::class);
        View::composers([
                            \App\Http\ViewComposers\NewsComposer::class => 'news.*',
                            \App\Http\ViewComposers\FooComposer::class => 'foo.index',
                        ]);
    }
}
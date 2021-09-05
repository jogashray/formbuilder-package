<?php
namespace Jray\Formbuilder;
use Illuminate\Support\ServiceProvider;

class FormBuilderServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'./routes/web.php');

    }
    public function register(){
        $this->app->bind('formbuilder', function($app) {
            return new Formbuilder();
        });
    }
}
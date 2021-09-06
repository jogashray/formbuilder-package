<?php
namespace Jray\Formbuilder;
use Illuminate\Support\ServiceProvider;

class FormBuilderServiceProvider extends ServiceProvider
{
    public function boot(){

    }
    public function register(){
        $this->app->bind('formbuilder', function($app) {
            return new Formbuilder();
        });
    }
}
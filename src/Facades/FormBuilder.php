<?php
namespace Jray\Formbuilder\Facades;
use Illuminate\Support\Facades\Facade;

class FormBuilder extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'formbuilder';
    }
}
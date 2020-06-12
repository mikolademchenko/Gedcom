<?php

namespace ModularSoftware\LaravelGedcom\Facades;

use Illuminate\Support\Facades\Facade;

class GedcomParserFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'asdfx/laravel-gedcom:parser';
    }
}
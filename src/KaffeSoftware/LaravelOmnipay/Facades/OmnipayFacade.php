<?php namespace KaffeSoftware\LaravelOmnipay\Facades;

use Illuminate\Support\Facades\Facade;

class OmnipayFacade extends Facade {

    protected static function getFacadeAccessor() { return 'omnipay'; }

}
<?php

define('path',dirname(dirname(__DIR__)));

use Neoan3\Apps\Ops;

require_once path . '/vendor/autoload.php';

require __DIR__.'/Controller.php';

require __DIR__.'/../models/FooBarBaz.php';

class RootController extends Controller {

    public function get(): string {
        return Ops::embraceFromFile('src/views/test.html',[
            'title' => 'hello world',
            'array' => FooBarBaz::get(),
        ]);
    }
}

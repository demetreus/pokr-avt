<?php

namespace App\Controllers;

use Framework\App;

/**
 * Class MainController
 * @package App\Controllers
 *
 * @author Demetreus this.demetreus@gmail.com
 */
class MainController extends AppController
{
    public function indexAction()
    {
        $posts = \R::findAll('test');

        $this->setMeta('Title ' . App::$app->getProperty('site_name'), 'author', 'description', 'keywords');

        $name = 'John Doe';
        $age = 25;
        $options = ['X', 'Y'];
        $this->set(compact('name', 'age', 'options', 'posts'));
    }
}
<?php

namespace App\Controllers;

use Framework\App;
use Framework\Cache;

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
        $this->setMeta('' . App::$app->getProperty('site_name'), 'author', 'description', 'keywords');

    }
}
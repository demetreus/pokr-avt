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
        $posts = \R::findAll('test');

        $this->setMeta('Title ' . App::$app->getProperty('site_name'), 'author', 'description', 'keywords');

        $name = 'John Doe';
        $age = 25;
        $options = ['X', 'Y', 'Z'];
        $cache = Cache::instance();
        //$cache->set('testCache', $options);
        //$cache->delete('testCache');
        $data = $cache->get('testCache');
        if (!$data) {
            $cache->set('testCache', $options);
        }
        debug($data);

        $this->set(compact('name', 'age', 'options', 'posts'));
    }
}
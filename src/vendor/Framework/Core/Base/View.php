<?php

namespace Framework\Base;

/**
 * Class View
 * @package Framework\Base
 *
 * @author Demetreus this.demetreus@gmail.com
 */
class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $layout;
    public $prefix;
    public $meta = [];
    public $data = [];

    /**
     * View constructor.
     * @param $route
     * @param string $layout
     * @param string $view
     * @param $meta
     */
    public function __construct($route, $layout = '', $view = '', $meta)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;

        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data)
    {

    }
}
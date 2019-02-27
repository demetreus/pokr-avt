<?php

namespace Framework\Base;

/**
 * Class Controller
 * @package Framework\Base
 *
 * @author Demetreus this.demetreus@gmail.com
 */
abstract class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $layout;
    public $prefix;
    public $meta = ['title' => '',
                    'author' => '',
                    'description' => '',
                    'keywords' => ''];
    public $data = [];

    /**
     * Controller constructor.
     * @param $route
     */
    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    /**
     * Method getView()
     *
     * Gets the view object and calls the render() method
     */
    public function getView()
    {
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }

    /**
     * @param $data
     */
    public function set($data)
    {
        $this->data = $data;
    }

    /**
     * @param string $title
     * @param string $author
     * @param string $description
     * @param string $keywords
     */
    public function setMeta($title = '', $author = '', $description = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['author'] = $author;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }
}
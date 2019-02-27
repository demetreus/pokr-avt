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

    /**
     * Method render()
     *
     * The method draws a view template
     * Retrieves the required view file and renders it on the page
     *
     * @param $data Data from the base controller
     * @throws \Exception
     */
    public function render($data)
    {
        if (is_array($data)) extract($data);

        $viewFile = APP . "/Views/{$this->prefix}{$this->controller}/{$this->view}.php";

        if (is_file($viewFile)) {
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("Error: {$viewFile} view not found", 500);
        }

        if (false !== $this->layout) {
            $layoutFile = APP . "/Views/layouts/{$this->layout}.php";

            if (is_file($layoutFile)) {
                require_once $layoutFile;
            } else {
                throw new \Exception("Error: {$this->layout} template not found", 500);
            }
        }
    }
}
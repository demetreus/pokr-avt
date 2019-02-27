<?php

namespace Framework;

/**
 * Class Router
 * @package Framework
 *
 * @author Demetreus this.demetreus@gmail.com
 */
class Router
{
    /**
     * @var array
     */
    protected static $routes = [];
    protected static $route = [];

    /**
     * The Add method adds one specific route to the routes table
     *
     * @param $regexp
     * @param array $route
     */
    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    /**
     * @return array
     */
    public static function getRoutes()
    {
        return self::$routes;
    }

    /**
     * @return array
     */
    public static function getRoute()
    {
        return self::$route;
    }

    /**
     * Method dispatch()
     *
     * The sender method
     * Checks if there is a given class and
     * method in the App/Controllers directory
     *
     * @param $url
     * @throws \Exception
     *
     */
    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);

        if (self::matchRoute($url)) {

            $controller = 'App\Controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';

            if (class_exists($controller)) {

                $controllerObject = new $controller(self::$route);

                $action = self::lowerCamelCase(self::$route['action']) . 'Action';

                if (method_exists($controllerObject, $action)) {
                    $controllerObject->$action();
                    $controllerObject->getView();
                } else {
                    throw new \Exception("Method {$controller} :: {$action} not found", 404);
                }

            } else {
                throw new \Exception("Controller {$controller} not found", 404);
            }

        } else {
            throw new \Exception("Page not found", 404);
        }
    }

    /**
     * Method matchRoute()
     *
     * The method takes the current URL and checks it for pattern matching
     *
     * @param $url
     * @return bool
     */
    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $url, $matches)) {

                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }

                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }

                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }

                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;

                return true;

            }
        }
        return true;
    }

    /**
     * @param $name
     * @return mixed
     */
    protected static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }

    /**
     * @param $name
     * @return string
     */
    protected static function lowerCamelCase($name)
    {
        return lcfirst(self::upperCamelCase($name));
    }

    /**
     * @param $url
     * @return string
     */
    protected static function removeQueryString($url)
    {
        if ($url) {
            $params = explode('&', $url, 2);

            if (false === strpos($params[0], '=')) {
                return rtrim($params[0], '/');
            } else {
                return '';
            }
        }
    }
}
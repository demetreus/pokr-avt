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

    public static function dispatch($url)
    {
        if (self::matchRoute($url)) {

        } else {
            throw new \Exception("Page not found", 404);
        }
    }

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

            }
        }
        return true;
    }
}
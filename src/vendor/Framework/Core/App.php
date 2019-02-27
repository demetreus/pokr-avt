<?php

namespace Framework;

/**
 * Class App
 * @package Framework
 *
 * @author Demetreus this.demetreus@gmail.com
 */
class App
{
    /**
     * @var string
     */
    public static $app;

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();

        if (DEBUG) maintenance();

        self::$app = Registry::instance();

        $this->getParams();

        new ErrorHandler();

        Router::dispatch($query);
    }

    /**
     * Check and get general application parameters from array
     */
    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php';

        if (!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }
}
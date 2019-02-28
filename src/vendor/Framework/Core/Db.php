<?php

namespace Framework;

/**
 * Class Db
 * @package Framework
 *
 * @author Demetreus this.demetreus@gmail.com
 */
class Db
{
    use TSingleton;

    protected function __construct()
    {
        $db = require_once CONFIG . '/settings.db.php';

        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);

        if (!\R::testConnection()) {
            throw new \Exception("Could not connect to database", 500);
        }

        \R::freeze(true);

        if (DEBUG) \R::debug(true, 1);

    }
}
<?php

namespace Framework;


class Db
{
    use TSingleton;

    protected function __construct()
    {
        $db = require_once CONFIG . '/settings.db.php';

        
    }
}
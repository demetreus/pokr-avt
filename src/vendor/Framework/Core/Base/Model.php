<?php

namespace Framework\Base;

use Framework\Db;

/**
 * Class Model
 * @package Framework\Base
 *
 * @author Demetreus this.demetreus@gmail.com
 */
abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }
}
<?php

namespace Framework;

/**
 * Trait TSingleton
 * @package Framework
 *
 * @author Demetreus this.demetreus@gmail.com
 */
trait TSingleton
{
    /**
     * @var object $instance;
     */
    private static $instance;

    public static function instance()
    {
        /**
         * If the $instance property is not initialized
         * We put in it object of the current class
         */
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}
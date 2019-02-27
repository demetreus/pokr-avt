<?php

namespace Framework;

/**
 * Class Registry
 * @package Framework
 *
 * Implemented the register design pattern
 * Instead, use dependency injection!
 *
 * @todo It is necessary to modify the system and change the design pattern
 */
class Registry
{
    use TSingleton;

    /**
     * @var array $properties
     */
    protected static $properties = [];

    /**
     * @param $name
     * @param $value
     */
    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function getProperty($name)
    {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return self::$properties;
    }
}
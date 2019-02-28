<?php

namespace Framework;

/**
 * Class Cache
 * @package Framework
 *
 * @author Demetreus this.demetreus@gmail.com
 */
class Cache
{
    use TSingleton;

    /**
     * @param $key
     * @param $data
     * @param int $seconds
     */
    public function set($key, $data, $seconds = 3600)
    {
        /**
         * Write the data to the cache
         */
        if ($seconds) {
            $content['data'] = $data;
            $content['end_time'] = time() + $seconds;

            if (file_put_contents(CACHE . '/' . md5($key) . '.txt', serialize($content))) {
                return true;
            }

            return false;
        }
    }

    /**
     * @param $key
     */
    public function get($key)
    {
        $file = CACHE . '/' . md5($key) . '.txt';

        /**
         * Get data from cache
         */
        if (file_exists($file)) {
            $content = unserialize(file_get_contents($file));

            if (time() <= $content['end_time']) {
                return $content;
            }
            unlink($file);
        }

        return false;
    }

    /**
     * @param $key
     */
    public function delete($key)
    {
        $file = CACHE . '/' . md5($key) . '.txt';

        if (file_exists($file)) {
            unlink($file);
        }
    }
}
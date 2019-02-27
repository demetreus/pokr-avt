<?php
/**
 * General description of all functions
 *
 * @author Demetreus this.demetreus@gmail.com
 */

/**
 * Debugging function
 *
 * Prints the debugger value
 *
 * @param mixed $arr
 */
function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

/**
 * The output function of the stub for the site-in-service mode
 */
function maintenance()
{
    // @todo Add an array of possible IP addresses

    if (!$_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
        echo '<h1>Сайт на техобслуживании!</h1>';
        exit;
    }
}

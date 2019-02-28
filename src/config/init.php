<?php
/**
 * Global application configuration
 *
 * @author Demetreus this.demetreus@gmail.com
 */

/**
 * We get the protocol
 * We get the full path in the URL string
 * Cut out *.php
 * Cut the directory /public
 *
 * @return string $protocol Protocol
 * @return string $app_path URL String
 */
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, strpos($_SERVER["SERVER_PROTOCOL"], '/'))) . '://';

$app_path = "{$protocol}{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

$app_path = preg_replace("#[^/]+$#", '', $app_path);

$app_path = str_replace('/public/', '', $app_path);

/**
 * Constant DEBUG
 *
 * Called anywhere in the application to debug the code
 * True value puts the application in development mode
 *
 * @return boolean define(DEBUG);
 */
define("DEBUG", true);

/**
 * Constant ROOT
 *
 * Contains the application root path
 *
 * @return string define(ROOT);
 */
define("ROOT", dirname(__DIR__));

/**
 * Constant WWW
 *
 * Contains the path to the public directory of the application
 *
 * @return string define(WWW);
 */
define("WWW", ROOT . '/public');

/**
 * Constant APP
 *
 * Contains the path to the application directory
 *
 * @return string define(APP);
 */
define("APP", ROOT . '/App');

/**
 * Constant CORE
 *
 * Contains the path to the base implementation directory of the core
 *
 * @return string define(CORE);
 */
define("CORE", ROOT . '/vendor/Framework/Core');

/**
 * Constant LIBS
 *
 * Contains the path to the kernel library directory
 *
 * @return string define(LIBS);
 */
define("LIBS", ROOT . '/vendor/Framework/Core/Libs');

/**
 * Constant CACHE
 *
 * Contains the path to the application's cache data
 *
 * @return string define(CACHE);
 */
define("CACHE", ROOT . '/tmp/cache');

/**
 * Constant CONFIG
 *
 * Contains the path to the application configuration
 *
 * @return string define(CONFIG);
 */
define("CONFIG", ROOT . '/config');

/**
 * Constant LAYOUT
 *
 * Contains the name of the current application template
 *
 * @return string define(LAYOUT);
 */
define("LAYOUT", 'pokrasimAvto');

/**
 * Constant PATH
 *
 * Contains the path of the application URL
 *
 * @return string define(PATH);
 */
define("PATH", $app_path);

/**
 * Constant ADMIN
 *
 * Contains the path to the admin directory
 *
 * @return string define(ADMIN);
 */
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';
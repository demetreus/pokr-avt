<?php
/**
 * Single entry point to the application
 * All redirections are sent to the file via the .htaccess file
 *
 * @author Demetreus this.demetreus@gmail.com
 *
 */

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONFIG . '/routes.php';

new \Framework\App();
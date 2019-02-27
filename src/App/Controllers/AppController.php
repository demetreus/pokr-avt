<?php

namespace App\Controllers;

use App\Models\AppModel;
use Framework\Base\Controller;

/**
 * Class AppController
 * @package App\Controllers
 *
 * @author Demetreus this.demetreus@gmail.com
 */
class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}
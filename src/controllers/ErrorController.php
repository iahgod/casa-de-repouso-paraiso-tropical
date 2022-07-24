<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\ConfigHandler;
class ErrorController extends Controller {

    public function index() {
        $config = ConfigHandler::get();
        $this->render('404', [
            'config'=>$config
        ]);
    }

}
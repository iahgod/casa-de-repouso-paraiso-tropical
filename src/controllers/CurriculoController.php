<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\ConfigHandler;
class CurriculoController extends Controller {

    public function index() {
        $config = ConfigHandler::get();
        $this->render('curriculo/criar', [
            'config'=>$config
        ]);
    }

}
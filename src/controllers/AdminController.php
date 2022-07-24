<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\ConfigHandler;
use \src\handlers\ItenHandler;
date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', 1);

error_reporting(E_ALL);
class AdminController extends Controller {

    private $loggedUser;

    public function __construct() {s=
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index() {
        $config = ConfigHandler::get();
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('admin/painel', [
            'config'=>$config,
            'flash'=>$flash
            ]);
    }
    public function loja() {
        $config = ConfigHandler::get();
        $itens = ItenHandler::get();
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('admin/loja', [
            'config'=>$config,
            'lista'=>$itens,
            'flash'=>$flash
            ]);
    }
    public function add(){
        $title = filter_input(INPUT_POST, 'title');
        $valor = filter_input(INPUT_POST, 'valor');
        $resumo = filter_input(INPUT_POST, 'resumo');
        $venda = filter_input(INPUT_POST, 'venda');
        $descricao = filter_input(INPUT_POST, 'descricao');
        if($title && $descricao){
            if(isset($_FILES['img1']) && !empty($_FILES['img1']['tmp_name'])) {
                $newLogo = $_FILES['img1'];
                if(in_array($newLogo['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $image1 = $this->cutImage($newLogo, 500, 500, 'assets/uploads');
                }
            }else{
                $_SESSION['flash'] = 'Envie a imagem de apresentação.';
            }
            if(isset($_FILES['img2']) && !empty($_FILES['img2']['tmp_name'])) {
                $newLogo = $_FILES['img2'];
                if(in_array($newLogo['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $fileName = md5(time().rand(0,9999)).'.jpg';
                    move_uploaded_file($_FILES['img2']['tmp_name'], "assets/uploads/".$fileName);
                    $image2 = $fileName;
                }
            }else{
                $_SESSION['flash'] = 'Envie a imagem principal.';
            }
            ItenHandler::add($title, $valor, $descricao, $image1, $image2, $resumo, $venda);
            $_SESSION['flash'] = 'Item criado com sucesso!';
            $this->redirect('/admin/loja');
        }else{
            $_SESSION['flash'] = 'Erro.';
        }
    }

    public function edit($atts = []) {
        if(!empty($atts['id'])) {
            $id = $atts['id'];
            $config = ConfigHandler::get();
            $item = ItenHandler::getItem($id);
            $flash = '';
            if(!empty($_SESSION['flash'])) {
                $flash = $_SESSION['flash'];
                $_SESSION['flash'] = '';
            }
            $this->render('admin/item', [
                'config'=>$config,
                'item'=>$item,
                'flash'=>$flash
                ]);
        }
    }

    public function editAction(){
        $title = filter_input(INPUT_POST, 'title');
        $valor = filter_input(INPUT_POST, 'valor');
        $descricao = filter_input(INPUT_POST, 'descricao');
        $img1 = filter_input(INPUT_POST, 'img1');
        $img2 = filter_input(INPUT_POST, 'img2');
        $id = filter_input(INPUT_POST, 'id');
        $resumo = filter_input(INPUT_POST, 'resumo');
        $venda = filter_input(INPUT_POST, 'venda');
        $descricao = filter_input(INPUT_POST, 'descricao');
        if($title && $descricao){
            if(isset($_FILES['img1']) && !empty($_FILES['img1']['tmp_name'])) {
                $newLogo = $_FILES['img1'];
                if(in_array($newLogo['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $image1 = $this->cutImage($newLogo, 500, 500, 'assets/uploads');
                    if (file_exists('assets/uploads/'.$img1)){
                        unlink('assets/uploads/'.$img1);  
                    }
                }
            }else{
                $image1 = $img1;
            }
            if(isset($_FILES['img2']) && !empty($_FILES['img2']['tmp_name'])) {
                $newLogo = $_FILES['img2'];
                if(in_array($newLogo['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {

                    $fileName = md5(time().rand(0,9999)).'.jpg';
                    move_uploaded_file($_FILES['img2']['tmp_name'], "assets/uploads/".$fileName);
                    $image2 = $fileName;
                    //$image2 = $this->cutImage($newLogo, 1280, 500, 'assets/uploads');
                    if (file_exists('assets/uploads/'.$img2)){
                        unlink('assets/uploads/'.$img2);  
                    }
                }
            }else{
                $image2 = $img2;
            }
            ItenHandler::update($title, $valor, $descricao, $image1, $image2, $id, $resumo, $venda);
            $_SESSION['flash'] = 'Item editado com sucesso!';
            $this->redirect('/admin/loja');
        }else{
            $_SESSION['flash'] = 'Erro.';
        }
    }

    public function delete($atts = []){
        if(!empty($atts['id'])) {
            $id = $atts['id'];
            ItenHandler::delete($id);
            $this->redirect('/admin/loja');
        }
    }

    //EDITAR CONFIG ACTION
    public function updateConfig(){
        $title_site = filter_input(INPUT_POST, 'title_site');
        $desc_site = filter_input(INPUT_POST, 'desc_site');
        $logo_site = filter_input(INPUT_POST, 'logo_site');
        $desc_meta = filter_input(INPUT_POST, 'desc_meta');
        $keywords = filter_input(INPUT_POST, 'keywords');
        $og_img = filter_input(INPUT_POST, 'og_img');
        $canonical = filter_input(INPUT_POST, 'canonical');
        $autor = filter_input(INPUT_POST, 'autor');
        $Copyright = filter_input(INPUT_POST, 'Copyright');
        $title_header = filter_input(INPUT_POST, 'title_header');
        $desc_header = filter_input(INPUT_POST, 'desc_header');
        $img_header = filter_input(INPUT_POST, 'img_header');
        $cor_principal = filter_input(INPUT_POST, 'cor_principal');
        $cor_secundaria = filter_input(INPUT_POST, 'cor_secundaria');
        if($title_site){
            ConfigHandler::update($title_site, $desc_site, $logo_site, $desc_meta, $keywords, $og_img, $canonical, $autor, $Copyright, $title_header, $desc_header, $img_header, $cor_principal, $cor_secundaria);
            $_SESSION['flash'] = 'Editado com sucesso!';
        }
        $this->redirect('/admin');
    }


    private function cutImage($file, $w, $h, $folder) {
        list($widthOrig, $heightOrig) = getimagesize($file['tmp_name']);
        $ratio = $widthOrig / $heightOrig;

        $newWidth = $w;
        $newHeight = $newWidth / $ratio;

        if($newHeight < $h) {
            $newHeight = $h;
            $newWidth = $newHeight * $ratio;
        }

        $x = $w - $newWidth;
        $y = $h - $newHeight;
        $x = $x < 0 ? $x / 2 : $x;
        $y = $y < 0 ? $y / 2 : $y;

        $finalImage = imagecreatetruecolor($w, $h);
        switch($file['type']) {
            case 'image/jpeg':
            case 'image/jpg':
                $image = imagecreatefromjpeg($file['tmp_name']);
            break;
            case 'image/png':
                $image = imagecreatefrompng($file['tmp_name']);
            break;
        }

        imagecopyresampled(
            $finalImage, $image,
            $x, $y, 0, 0,
            $newWidth, $newHeight, $widthOrig, $heightOrig
        );

        $fileName = md5(time().rand(0,9999)).'.jpg';

        imagejpeg($finalImage, $folder.'/'.$fileName);

        return $fileName;
    }

}
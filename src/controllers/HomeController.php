<?php
namespace src\controllers;

use \core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

date_default_timezone_set('America/Sao_Paulo');
class HomeController extends Controller {

    private $loggedUser;

    public function index() {
        $flash = '';if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';}
        $this->render('home', [
            'flash'=>$flash
            ]);
    }

    public function quemSomos() {
        $flash = '';if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';}
        $this->render('sobre', [
            'flash'=>$flash
            ]);
    }

    public function contato() {
        $flash = '';if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';}
        $this->render('contato', [
            'flash'=>$flash
            ]);
    }

    public function contatoAction(){

        $nome = filter_input(INPUT_POST, 'nome');
        $from = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $celular = filter_input(INPUT_POST, 'celular');
        $mensagem = filter_input(INPUT_POST, 'mensagem');

        $html = '<h1>Formulário de contato do Site (https://casaderepousopt.com.br)</h1></hr>';
        $html .= '<b>Mensagem: </b>: '.$mensagem;
        $html .= '</br><b>Telefone/Celular: </b>: '.$celular;

        $mail = new PHPMailer(true);
        $email = false;
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.hostinger.com';                   //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'contato@smarterlar.net';                     //SMTP username
            $mail->Password   = 'Guest2236';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('contato@smarterlar.net', $nome);
            $mail->addAddress('iahgod25@gmail.com', 'Casa de Repouso Paraíso Tropical');
            // $mail->addAddress('contato@casaderepousopt.com.br', 'Casa de Repouso Paraíso Tropical');
            $mail->addReplyTo($from, $nome);

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Contato formulario de contato do site';
            $mail->Body    = $html;
            $mail->AltBody = 'Contato formulario de contato do site';

            $mail->send();
            $email = true;
            $_SESSION['flash'] = 'Mensagem enviado com sucesso, vamos responder o mais rápido possível!';
            $this->redirect('/contato');
        } catch (Exception $e) {
            $_SESSION['flash'] = 'Ops, aconteceu algum erro ao enviar sua mensagem, se continuar tendo poblemas envie-nos uma mensagem no telefone ao lado!';
            $this->redirect('/contato');
            
        }
        
    }
    

}
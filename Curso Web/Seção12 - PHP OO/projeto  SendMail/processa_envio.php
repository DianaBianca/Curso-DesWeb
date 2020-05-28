<?php

    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    
    //print_r($_POST);
     
    class Mensagem{
        private $para      = null;
        private $assunto   = null;
        private $mensagem  = null;

        public function __get($attr){
            return $this->$attr; 
        }

        public function __set($attr, $valor){
            $this->$attr = $valor;
        }

        public function mensagemValida(){
            //
            if(empty($this->para)||empty($this->assunto)||empty($this->mensagem)){
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']); 
    $mensagem->__set('assunto', $_POST['assunto']); 
    $mensagem->__set('mensagem', $_POST['mensagem']); 

    //print_r($mensagem);
    if(!$mensagem->mensagemValida()){
        echo 'Mensagem não é valida';
        die();
    }
 
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'paraqualquercoisamesmo@gmail.com';                 // SMTP username
        $mail->Password = 'asdzxc546';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('paraqualquercoisamesmo@gmail.com', 'Desenvolvedora Web Diana ROdrigues :3');
        $mail->addAddress($mensagem->__get('para'));     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');// destinatario de copia
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $mensagem->__get('assunto') ;
        $mail->Body    = $mensagem->__get('mensagem') ;
        $mail->AltBody = 'É necessa´rio utilizar um client que suporte HTML para ter acesso totalnao conteudo dessa mensagem';

        $mail->send();
        echo 'E-mail enviado com sucesso !';
    } catch (Exception $e) {
        echo 'Não foi possível enviar esse email, por favor tente mais tarde.';
        echo 'Detalhe do Erro : ' . $mail->ErrorInfo;
    }

    

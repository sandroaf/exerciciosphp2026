   <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    date_default_timezone_set('America/Sao_Paulo');
   
   function idade($dtnascto) {
   /*funcão que recebe uma data de nascimento por parametro e calcula a idade em anos, retornando o número de anos pela função*/
      $hoje = new DateTime();
      $dtnascto = new DateTime($dtnascto);
      $idade = $dtnascto->diff($hoje);
      return $idade->format('%y');  
   }

   function email($para, $de, $denome, $assunto, $msg) {

        //Load Composer's autoloader (created by composer, not included with PHPMailer)
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'apikey';                     //SMTP username
            //$mail->Password   = 'secret'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($de, $denome);
            $mail->addAddress($para);     //Add a recipient
            $mail->addReplyTo($de);
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $assunto;
            $mail->Body    = $msg;

            $mail->send();
            return 'Mensagem enviada';
        } catch (Exception $e) {
            die("Mensagem não enviada. e-mail Erro: {$mail->ErrorInfo}");
        }
   }

   ?>
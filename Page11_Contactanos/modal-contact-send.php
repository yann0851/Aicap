<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;



//Create an instance; passing `true` enables exceptions
// $name = $_POST['name'];
// $prenom= $_POST['prenom'];
// $email = $_POST['email'];
// $teléfono=$_POST['teléfono'];
// $subject = $_POST['subject'];
// $body = $_POST['body'];
// $aicap= $_POST['aicap'];
// $otros= $_POST['otros'];
// $amigos= $_POST['amigos'];
// $internet= $_POST['internet'];


// $mail = new PHPMailer(true);

// try {                  //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'raelle.yann@gmail.com';                     //SMTP username
//     $mail->Password   = 'yqkrfonxrlafttuw';                               //SMTP password
//     $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//     $mail->setFrom($email);     //Add a recipient
//     $mail->addAddress('raelle.yann@gmail.com');
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 
//     "Aquí están sus coordenadas : <br>
    
//     Nombre:$name <br>
//     Apellido: $apellido <br>
//     Teléfono: $teléfono <br>
//     Correo electrónico: $email <br> <br>
//     lo que le interesa : $subject <br>
//     ¿Cómo nos ha encontrado? $checkbox internet";
    
//     $mail->send();
// }

// try {
//     //Server settings
//     // $mail->SMTPDebug = 2;
//     $mail->IsSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
//     $mail->Port = 465;                                    // Set the SMTP port
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'raelle.yann@gmail.com';                // SMTP username
//     $mail->Password = 'yqkrfonxrlafttuw';                  // SMTP password
//     $mail->SMTPSecure = 'ssl';   
//     $mail->CharSet = 'UTF-8';                         // Enable encryption, 'ssl' also accepted
    
//     $mail->From = 'raelle.yann@gmail.com';
//     $mail->Subject = " Hola Yann, bon anniv";
//     $mail->Body =
//     "Aquí están sus coordenadas : <br>
    
//     Nombre:$name <br>
//     Apellido: $apellido <br>
//     Teléfono: $teléfono <br>
//     Correo electrónico: $email <br> <br>
//     lo que le interesa : $subject <br>
//     ¿Cómo nos ha encontrado? $checkbox internet";
    
//     $mail->FromName = 'Wel Red';
//     $mail->AddAddress("raelle.yann@gmail.com");
//     $mail->send();}


// catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

//phpmailer



require "PHPMailer/PHPMailerAutoload.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['prenom']) ){


    

    $name = $_POST['name'];
    $prenom= $_POST['prenom'];
    $email = $_POST['email'];
    $teléfono=$_POST['teléfono'];
    $subject = $_POST['subject'];
    $checkbox = $_POST['checkbox'];
    
 
    // require_once "PHPMailer/PHPMailer.php";
    // require_once "PHPMailer/SMTP.php";
    // require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
   // $mail->Username = "grupoaicap07@gmail.com";
    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "quatresolsjustine@gmail.com";
    $mail->Password = 'zzforxwhpqmbawoz';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    $mail->SetLanguage(“es”, “opcional/ruta/al/directorio/language/”);
    $mail->CharSet = 'UTF-8';

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email);
    $mail->addAddress("quatresolsjustine@gmail.com");
	//$mail->addAddress("quentinfever@icloud.com");
    $mail->Subject = " Hola Catalina, has recibido una solicitud de contacto a través de la web aicap.es.";
    $mail->Body =
    "Aquí están sus coordenadas : <br>
    
    Nombre:$name <br>
    Apellido: $prenom <br>
    Teléfono: $teléfono <br>
    Correo electrónico: $email <br> <br>
    lo que le interesa : $subject <br>
    ¿Cómo nos ha encontrado? $checkbox internet";

    if($mail->send()){
        // $status = "success";
        $response = "Mensaje enviado con éxito";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>
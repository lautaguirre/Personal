<?php
    $sname=strip_tags($_POST['name']);
    $semail=strip_tags($_POST['email']);
    $smessage=strip_tags($_POST['message']);

    $to = 'lauta.nahuel94@gmail.com';
    $subject = "CONTACTO";
    $message = "<html>
    <body>
        <h3>".$sname." quiere contactarse con usted y le envia el siguiente mensaje:</h3>   
        <p>Email: ".$semail."</p>
        <p>Mensaje: ".$smessage."</p>
        <A>http://www.lautaguirre.xyz</A>
    </body>
    </html>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,$message,$headers);

?>
<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    public $email;
    public $nombre;
    public $token;
    public function __construct($nombre, $email, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        //* Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '1cdd6e921b6e34';
        $mail->Password = '77c6e32446919a';
        //Configurar el contenido del email
        $mail->setFrom('cuentas@cosechas.com');
        $mail->addAddress('cuentas@cosechas.com', 'Cosechas.com');
        $mail->Subject = 'Confirma Tu cuenta';

        // Habilitar HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        //Definir el contenido
        $contenido = '<html>';
        $contenido .= '<p>Hola <strong>' . $this->nombre . '</strong> Has creado tu cuenta en AppSalon, ahora solo debes confirmarla presionando el siguiente enlace</p>';
        $contenido .= '<p>Presiona aqui: <a href="http://prueba.localhost/confirmar-cuenta?token=' . $this->token . '">Confirmar Cuenta</a> </p>';
        $contenido .= '<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje.</p>';
        $contenido .= '</html>';

        $mail->Body = $contenido;
        // Enviar el email
        if ($mail->send()) {
            $mensaje = 'Mensaje Enviado Correctamente';
        } else {
            $mensaje = 'El mensaje no pudo ser enviado';
        }
    }

    public function enviarIntrucciones()
    {
        //* Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '1cdd6e921b6e34';
        $mail->Password = '77c6e32446919a';
        //Configurar el contenido del email
        $mail->setFrom('cuentas@cosechas.com');
        $mail->addAddress('cuentas@cosechas.com', 'Cosechas.com');
        $mail->Subject = 'Confirma Tu cuenta';

        // Habilitar HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        //Definir el contenido
        $contenido = '<html>';
        $contenido .= '<p>Hola <strong>' . $this->nombre . '</strong> Has solicitado restablecer tu password, sigue el siguiente enlace para hacerlo</p>';
        $contenido .= '<p>Presiona aqui: <a href="http://prueba.localhost/recuperar?token=' . $this->token . '"  
        style = "background-color: green;
            padding: 1.5rem 4rem;
            text-decoration: none;
            color: white;
            margin-top: 2rem;
            font-size: 2rem;
            font-weight: 400;
            display: inline-block;
            font-weight: 700;
            border: none;
            transition-property: background-color;
            transition-duration: .3s;
            text-align: center;
            display: block;
            width: 30%;
            margin: 5rem 0;
            border-radius: 2rem;">Restablecer Password</a> </p>';
        $contenido .= '<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje.</p>';
        $contenido .= '</html>';

        $mail->Body = $contenido;
        // Enviar el email
        if ($mail->send()) {
            $mensaje = 'Mensaje Enviado Correctamente';
        } else {
            $mensaje = 'El mensaje no pudo ser enviado';
        }
    }
}

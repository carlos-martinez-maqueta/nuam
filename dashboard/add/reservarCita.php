<?php
include '../config/conexion.php';
include '../class/global.php';

session_start();
 

// $emailPrincipal = $userObj->correo;

require_once '../mail/lib/PHPMailer/Exception.php';
require_once '../mail/lib/PHPMailer/PHPMailer.php';
require_once '../mail/lib/PHPMailer/SMTP.php';
require_once '../mail/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $id_cliente =  !empty($_POST['id_cliente']) ? $_POST['id_cliente'] : null;
    $fecha =  !empty($_POST['fecha']) ? $_POST['fecha'] : null;
    $horario =  !empty($_POST['horario']) ? $_POST['horario'] : null;
    $modalidad =  !empty($_POST['modalidad']) ? $_POST['modalidad'] : null;
    $mensaje =  !empty($_POST['mensaje']) ? $_POST['mensaje'] : null;

    $result = Globales::addCita($id_cliente, $fecha, $horario, $modalidad, $mensaje);

    if ($result) {
        $response = array(
            'status' => 'success',
            'message' => 'Se agregó la reserva correctamente. Se revisará y actualizaremos el estado de la cita. ¡Gracias!'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Error al registrar la reserva.'
        );
    }
    echo json_encode($response);

}

<?php 
    // Obtener la fecha actual
    $fecha_actual = new DateTime();

    // Traducir el mes al español
    $meses = [
        '01' => 'Enero',
        '02' => 'Febrero',
        '03' => 'Marzo',
        '04' => 'Abril',
        '05' => 'Mayo',
        '06' => 'Junio',
        '07' => 'Julio',
        '08' => 'Agosto',
        '09' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre'
    ];

    $dia = $fecha_actual->format('d');
    $mes = $meses[$fecha_actual->format('m')];
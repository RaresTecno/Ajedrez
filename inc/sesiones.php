<?php
    session_start();

    if (!isset($_SESSION['turno'])) {
        $_SESSION['turno'] = array(
            'color' => "blanco",
            'piezasActivas' => $piezas,
            'piezasPerdidas' => "",

        );
    }


?>
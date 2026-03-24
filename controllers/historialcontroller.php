<?php

class HistorialController {

    public function index() {
        // 1. Aquí  pedirle al Modelo los datos de la paciente
        $paciente = $this->modelo->getPaciente($_GET['id']);

        // 2. Cargamos las partes de la página en orden
        require_once "views/includes/header.php";   // Trae el menú azul y el CSS
        require_once "views/historial.php";        // Trae el formulario que acabamos de crear
        require_once "views/includes/footer.php";   // Cierra las etiquetas y trae JS
    }

    public function guardar() {
        if($_POST) {
            // Lógica para recibir los datos del formulario y enviarlos a la DB
            echo "Datos recibidos: " . $_POST['diagnostico'];
        }
    }
}
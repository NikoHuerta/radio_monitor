<?php

require_once '../static/modelo.php';

$iddestinatario = $_POST['iddestinatario'];



$elimina = new Consulta();
$elimina ->eliminaDestinatario($iddestinatario,1);

echo "Datos Actualizados";


?>

<?php
// Recibimos los datos
$nombre = $_POST['nombre'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$email = $_POST['email'] ?? '';
$tamano = $_POST['tamano'] ?? '';
$motivo = $_POST['motivo'] ?? '';
$fecha = date('Y-m-d');

// Cargamos el XML
$xml = simplexml_load_file('adopciones.xml');

// Creamos el nuevo nodo
$solicitud = $xml->addChild('solicitud');
$solicitud->addChild('nombre', htmlspecialchars($nombre));
$solicitud->addChild('telefono', htmlspecialchars($telefono));
$solicitud->addChild('email', htmlspecialchars($email));
$solicitud->addChild('mascota_buscada', htmlspecialchars($tamano));
$solicitud->addChild('motivo', htmlspecialchars($motivo));
$solicitud->addChild('fecha', $fecha);

// Guardamos
$xml->asXML('adopciones.xml');

echo "¡Solicitud recibida! <a href='adopcion.html'>Volver</a>";
?>
<?php
$ope=$_GET['num'];

switch ($ope) {
    case 0:
    $contenido='src/template/body/principal.php';

        break;
    case 1:
    $contenido='../src/views/quienesSomos.php';
        break;
    case 2:
    $contenido='src/views/Contactanos.php';
        break;
    case 3:
    $contenido='src/views/Servicios.php';
         break;
    case 4:
    $contenido='src/views/Cursos.php';
        break;
    case 5:
    $contenido='src/views/Normas.php';
        break;
        default:
    $contenido='src/template/body/principal.php';
    $titulo='Contadores Publicos';
        break;
}

?>
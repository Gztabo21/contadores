<?php
error_reporting(E_ALL ^ E_NOTICE);
$ope=$_GET['num'];

switch ($ope) {
    case Registrar:
    $contenido='src/views/registrar.php';
    $titulo='Registrate';
        break;
    case login:
    $contenido='src/views/login.php';
    $titulo='Inicia sesion';
        break;
        case cursos:
             $contenido='src/views/Cursos.php';
            $titulo='Cursos y Diplomados';
            break;

    case 1:
    $contenido='src/views/quienesSomos.php';
    $titulo='Quienes Somos';
        break;
    case 2:
    $contenido='src/views/Contactanos.php';
        break;
    case 3:
    $contenido='src/views/Servicios.php';
         break;
    case cursos:
    $contenido='src/views/Cursos.php';
        break;
    case 5:
    $contenido='src/views/Normas.php';
        break;
        default:
    $contenido = 'src/template/body/principal.php';
    $titulo ='Contadores Publicos';
        break;
}

?>
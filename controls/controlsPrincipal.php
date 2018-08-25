<?php
$ope=$_GET['num'];

switch ($ope) {
    case 0:
    include('src/template/body/principal.php');
        break;
    case 1:
    include('../src/views/quienesSomos.php');
        break;
    case 2:
    include('src/views/Contactanos.php');
        break;
    case 3:
    include('src/views/Servicios.php');
         break;
    case 4:
    include('src/views/Cursos.php');
        break;
    case 5:
    include('src/views/Normas.php');
        break;
}

?>
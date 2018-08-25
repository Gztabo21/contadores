<?php
$ope=$_GET['num'];

switch ($ope) {
    case 0:
    include('src/template/body/principal.php');
        break;
    case 1:
    include('src/template/views/quienesSomos.php');
        break;
    case 2:
    include('src/template/views/Contactanos.php');
        break;
    case 3:
    include('src/template/views/Servicios.php');
         break;
    case 4:
    include('src/template/views/Cursos.php');
        break;
    case 5:
    include('src/template/views/Normas.php');
        break;
}

?>
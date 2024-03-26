<?php
include '../models/SendNotification.php';
switch ($_POST['formulario']) {
    case 'INTERNET':
        mandarReservacionVentas($_POST['formulario'], $_POST['datos']);
        break;
}
?>

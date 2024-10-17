<?php
    require_once 'modelo/cliente.php';
    require_once 'modelo/productoFisico.php';

    $c1 = new Cliente("Pablo Dominguez");
    $c2 = new Cliente("Rocio Gonzalez");

    $productofisico = new productoFisico("Telefono",1000,0.5);
    echo "Nombre: ". productofisico->getNombre() . ", Precio: " . productofisico->getPrecio() .", PrecioFinal: ". $productofisico->calculaPrecioFinal();
?>

<ol>
    <li>
        <?=$cl-> getNombre()?>
    </li>
    <li>
        <?=$c2-> getNombre()?>
    </li>
<ol>
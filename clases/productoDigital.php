<?php
include_once 'producto.php';
class ProductoDigital extends Producto{
    public function calculaPrecioFinal(){
        return $this->precio;
    }
}

?>
<?php

class Helado {
    var $altura;
    var $sabor;
    var $precio;
    
    function Helado() {
        $this->altura = 15; // en cm
        $this->sabor = "vainilla";
        $this->precio = 2.50;
        echo 'Altura: ' . $this->altura . ' cm<br>';
        echo 'Sabor: ' . $this->sabor . '<br>';
        echo 'Precio: $' . $this->precio . '<br>';
    }
}

$miHelado = new Helado();

echo = Helado;

?>
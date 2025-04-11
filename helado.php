<?php

class Helado {
    var $altura;
    var $sabor;
    var $precio;
    var $tipo;
    
    function Helado($altura = 15, $sabor = "vainilla", $precio = 2.50, $tipo = "cono") {
        $this->altura = $altura;
        $this->sabor = $sabor;
        $this->precio = $precio;
        $this->tipo = $tipo;
    }
    
    function mostrarInfo() {
        echo "Helado de {$this->sabor}, tipo {$this->tipo}, altura {$this->altura} cm, precio \${$this->precio}<br>";
    }
    
    function derretir() {
        $this->altura *= 0.7;
        echo "El helado se ha derretido. Nueva altura: {$this->altura} cm<br>";
    }
    
    function cambiarSabor($nuevoSabor) {
        $this->sabor = $nuevoSabor;
    }
    
    function calcularPrecioConIva() {
        return $this->precio * 1.16;
    }
}

// Método main() que crea objetos de ambas clases
function main() {
    
    // Crear objeto Helado
    $helado1 = new Helado(20, "chocolate", 3.75, "copa");
    
    $helado1->mostrarInfo(); //
}

// Ejecutar el método main
main();

?>
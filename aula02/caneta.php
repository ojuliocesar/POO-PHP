<?php

class Caneta {
    var $cor, $modelo, $ponta, $carga, $tampada;

    function rabiscar() {
        if ($this->tampada == false) {
            echo "Estou rabiscando, ihuuuuu";
        } else {
            echo "Eita, deu erro! Não posso rabiscar :(";
        }
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }
}

?>
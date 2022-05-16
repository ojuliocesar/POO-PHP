<?php

class Caneta {
    public $cor, $modelo;
    private $ponta;
    protected $carga, $tampada;

    public function rabiscar() {
        if ($this->tampada == false) {
            echo "Estou rabiscando, ihuuuuu";
        } else {
            echo "Eita, deu erro! Não posso rabiscar :(";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}

?>
<?php

class ContaBanco {

public $numeroConta;
protected $tipo;
private $dono, $saldo, $status;

public function abrirConta($tipo) {
    $this->setTipo($tipo);
    $this->setStatus(true);

    if($this->getTipo() == "CC") { 
        $this->setSaldo(50);
    } elseif($this->getTipo() == "CP") {
        $this->setSaldo(150);
    }
}

public function fecharConta() {
    if($this->getSaldo() > 0) {
        echo "Conta com dinheiro";
    } elseif($this->getSaldo() < 0) {
        echo "Conta em débito";
    } else {
        $this->setStatus(false);
    }
}

public function depositar($valor) {
    if($this->getStatus(true)) {
        $this->setSaldo($this->getSaldo() + $valor);
    } else {
        echo "Impossível depositar";
    }
}

public function sacar($valor) {
    if($this->getStatus(true)) {
        if($this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
        } else {
            echo "Saldo insuficiente";
        }
    } else {
        echo "Impossível sacar";
    }
}

public function pagarMensalidade() { 
    if($this->getTipo() == "CC") {
        $valor = 12;
    } elseif($this->getTipo() == "CP") {
        $valor = 20;
    }

    if($this->getStatus(true)) {
        if($this->getSaldo() > $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
        } else {
            echo "Saldo insuficiente";
        }
    } else {
        echo "Impossivel sacar";
    }
}

public function __construct() {
    $this->status = false;
    $this->saldo = 0;
}

public function setNumeroConta($numeroConta) {
    $this->numeroConta = $numeroConta;
}

public function getNumeroConta() {
    return $this->numeroConta;
}

public function setTipo($tipo) {
    $this->tipo = $tipo;
}

public function getTipo() {
    return $this->tipo;
}

public function setDono($dono) {
    $this->dono = $dono;
}

public function getDono() {
    return $this->dono;
}

public function setSaldo($saldo) {
    $this->saldo = $saldo;
}

public function getSaldo() {
    return $this->saldo;
}

public function setStatus($status) {
    $this->status = $status;
}

public function getStatus() {
    return $this->status;
}

}

?>
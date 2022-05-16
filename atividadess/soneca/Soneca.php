<?php

class Soneca {
    var $acordado, $local, $sonhos;

    function acordar() {
        $this->acordado = true;
    }

    function dormir() {
        $this->acordado = false;
    }
}

?>
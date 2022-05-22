<?php

require_once 'Lobo.php';

class Cachorro extends Lobo {
    public function emitirSom() {
        echo "Au!Au!Au";
    }

    public function reagirFrase($frase) {
        if($frase == "Oi" ||  $frase == "Senta" || $frase == "Rola" || $frase == "Deita" || $frase == "Da a patinha") {
            echo "<p>O cachorro ficou feliz! Ele está obcecado por você</p>";
        } elseif($frase == "Cachorro mau" || $frase == "Muito feio" || $frase == "Não gosto de você" || $frase == "Feio") {
            echo "<p>O cachorro ficou triste. Ele rosna para se defender, mas sente um enorme vazio</p>";
        }
    }

    public function reagirHora($hora, $minuto) {
        if($hora < 12) {
            echo "<p>O cachorro está agitado. Tudo que você faz ele responde com um pulinho</p>";
        } elseif($hora >= 18) {
            echo "<p>O cachorro está com sono. Ele te responde com um piscar sonolento</p>";
        }  else {
            echo "<p>O cachorro está se preparando para dormir, ele não liga para o que você faça</p>";
        }
    }

    public function reagirDono($dono) {
        if($dono) {
            echo "<p>O cachorro é seu, ele gosta de você. Ele te responde com um abraço!</p>";
        } else {
            echo "<p>O cachorro não é seu. Ganhe a sua confiaça! Assim poderá brincar com ele</p>";
        }
    }

    public function reagirIdade($idade, $peso) {
        if($idade < 5) {
            echo "<p>Seu cachorro está na melhor idade para brincar. Ele pula de alegria</p>";
            if($peso < 10) {
                echo "<p>Seu cachorro está bem leve. Ele pula e sai voando</p>";
            } else {
                echo "<p>Seu cachorro está gordinho. Ele não consegue pular para brincar</p>";
            }
        } else {
            echo "<p>Você precisa brincar com seu cachorro!</p>";
            if($peso < 10) {
                echo "<p>Seu cachorro está bem levinho. Ele tenta pular, mas sua idade não permite</p>";
            } else {
                echo "<p>Seu cachorro está gordinho. Ele tenta pular mas não consegue. Está gordo e velho demais</p>";
            }
        }
    }   
}

?>
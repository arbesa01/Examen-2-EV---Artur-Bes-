<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {

    public function testHeridaLeveVive() {
       
        $evento = new Enana('Anacleta', 100, 'viva');
        $this->assertEquals(90, $evento->heridaLeve());
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva

    }

    public function testHeridaLeveMuere() {
        $evento = new Enana('Anacleta', 9, 'viva');
        $this->assertEquals(-1, $evento->heridaLeve());
        $this->assertEquals('muerta', $evento->situacion);
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta

    }

    public function testHeridaGrave() {
        $evento = new Enana('Anacleta', 65466197349837948179797893491, 'viva');
        $this->assertEquals(0, $evento->heridaGrave());
        $this->assertEquals('limbo', $evento->situacion);
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo

    }
    
    public function testPocimaRevive() {
        $evento = new Enana('Anacleta', -6, 'viva');
        $this->assertEquals(4, $evento->pocima());
        $this->assertEquals('viva', $evento->situacion);
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva

    }

    public function testPocimaExtraLimbo() {
        $evento = new Enana('Anacleta', 0, 'limbo');
        $this->assertEquals(50, $evento->pocimaExtra());
        $this->assertEquals('viva', $evento->situacion);
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.
    }
}


?>
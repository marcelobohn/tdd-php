<?php
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function testSomaComParametros()
    {
        $this->assertEquals(4, soma(2, 2));
    }

    public function testSomaSemParamtros()
    {
        $this->assertEquals(0, soma());
    }    
}
?>
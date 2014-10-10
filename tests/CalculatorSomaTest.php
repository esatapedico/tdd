<?php
namespace Vox\Treinamento\Tdd\Tests;

use Vox\Treinamento\Tdd\Tests\AbstractCalculatorTestCase;

class CalculatorSomaTest extends AbstractCalculatorTestCase
{
    public function testSomaInteirosCorreta()
    {
        $this->assertEquals($this->calculator->soma(1,2), 3);
    }
    
    public function testSomaInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->soma(1,2), 4);
    }
    
    public function testSomaReaisCorreta()
    {
        $this->assertEquals($this->calculator->soma(1.2,2.3), 3.5);
    }
    
    public function testSomaReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->soma(2.3,3.4), 5.9);
    }
    
    public function testSomaNegativosInteirosCorreta()
    {
        $this->assertEquals($this->calculator->soma(-1,-2), -3);
    }
    
    public function testSomaNegativosInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->soma(-2,-3), -8);
    }
    
    public function testSomaNegativosReaisCorreta()
    {
        $this->assertEquals($this->calculator->soma(-1.4,-2.5), -3.9);
    }
    
    public function testSomaNegativosReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->soma(-1.5,-5.4), -1.2);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testSomaValoresNumericos()
    {
        $this->calculator->soma('vox', 'tecnologia');
    }
}
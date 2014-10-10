<?php
namespace Vox\Treinamento\Tdd\Tests;

use Vox\Treinamento\Tdd\Tests\AbstractCalculatorTestCase;

class CalculatorDivisaoTest extends AbstractCalculatorTestCase
{
    public function testDivisaoInteirosCorreta()
    {
        $this->assertEquals($this->calculator->divide(1,2), 0.5);
    }
    
    public function testDivisaoInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->divide(1,2), 0.6);
    }
    
    public function testDivisaoReaisCorreta()
    {
        $this->assertEquals($this->calculator->divide(4.6,2.3), 2);
    }
    
    public function testDivisaoReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->divide(2.3,3.4), 1);
    }
    
    public function testDivisaoNegativosInteirosCorreta()
    {
        $this->assertEquals($this->calculator->divide(-1,-2), 0.5);
    }
    
    public function testDivisaoNegativosInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->divide(-2,-4), 2.1);
    }
    
    public function testDivisaoNegativosReaisCorreta()
    {
        $this->assertEquals($this->calculator->divide(-1.5,-2.5), 0.6);
    }
    
    public function testDivisaoNegativosReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->divide(1,2), 1);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testDivisaoPorZero()
    {
        $this->calculator->divide(1,0);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testDivisaoValoresNumericos()
    {
        $this->calculator->divide('vox', 'tecnologia');
    }
}
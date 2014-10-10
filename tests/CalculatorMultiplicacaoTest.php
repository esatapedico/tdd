<?php
namespace Vox\Treinamento\Tdd\Tests;

use Vox\Treinamento\Tdd\Tests\AbstractCalculatorTestCase;

class CalculatorMultiplicacaoTest extends AbstractCalculatorTestCase
{
    public function testMultiplicacaoInteirosCorreta()
    {
        $this->assertEquals($this->calculator->multiplica(1,2), 2);
    }
    
    public function testMultiplicacaoInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->multiplica(1,2), 3);
    }
    
    public function testMultiplicacaoReaisCorreta()
    {
        $this->assertEquals($this->calculator->multiplica(1.2,2.3), 2.76);
    }
    
    public function testMultiplicacaoReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->multiplica(2.3,3.4), 7.9);
    }
    
    public function testMultiplicacaoNegativosInteirosCorreta()
    {
        $this->assertEquals($this->calculator->multiplica(-1,-2), 2);
    }
    
    public function testMultiplicacaoNegativosInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->multiplica(-2,-3), -6);
    }
    
    public function testMultiplicacaoNegativosReaisCorreta()
    {
        $this->assertEquals($this->calculator->multiplica(-1.4,-2.5), 3.5);
    }
    
    public function testMultiplicacaoNegativosReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->multiplica(1,2), 4);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testMultiplicacaoValoresNumericos()
    {
        $this->calculator->multiplica('vox', 'tecnologia');
    }
}

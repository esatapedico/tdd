<?php
namespace Vox\Treinamento\Tdd\Tests;

use Vox\Treinamento\Tdd\Tests\AbstractCalculatorTestCase;

class CalculatorSubtracaoTest extends AbstractCalculatorTestCase
{
    public function testSubtracaoInteirosCorreta()
    {
        $this->assertEquals($this->calculator->subtrai(1,2), -1);
    }
    
    public function testSubtracaoInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->subtrai(1,3), 1);
    }
    
    public function testSubtracaoReaisCorreta()
    {
        $this->assertEquals($this->calculator->subtrai(1.2,2.3), -1.1);
    }
    
    public function testSubtracaoReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->subtrai(5.3,3.4), 1.4);
    }
    
    public function testSubtracaoNegativosInteirosCorreta()
    {
        $this->assertEquals($this->calculator->subtrai(-1,-2), 1);
    }
    
    public function testSubtracaoNegativosInteirosIncorreta()
    {
        $this->assertNotEquals($this->calculator->subtrai(-2,-3), 2);
    }
    
    public function testSubtracaoNegativosReaisCorreta()
    {
        $this->assertEquals($this->calculator->subtrai(-1.4,-2.5), 1.1);
    }
    
    public function testSubtracaoNegativosReaisIncorreta()
    {
        $this->assertNotEquals($this->calculator->subtrai(-3.4,-2.5), -0.95);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testSubtracaoValoresNumericos()
    {
        $this->calculator->subtrai('vox', 'tecnologia');
    }
}

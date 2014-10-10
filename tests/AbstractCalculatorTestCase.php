<?php
namespace Vox\Treinamento\Tdd\Tests;


abstract class AbstractCalculatorTestCase extends \PHPUnit_Framework_TestCase {

    protected $calculator;
    
    public function setUp()
    {
        $this->calculator = new \Vox\Treinamento\Tdd\Calculator();
    }
    
}

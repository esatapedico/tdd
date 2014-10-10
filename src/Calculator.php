<?php
namespace Vox\Treinamento\Tdd;

class Calculator
{
    /**
     * 
     * @param unknown $x
     * @param unknown $y
     * @return number
     */
	public function soma($x, $y)
	{
	    $this->validaValoresNumericos($x);
	    $this->validaValoresNumericos($y);
	    
		return $x + $y;
	}
	
	/**
	 * 
	 * @param number $x
	 * @param number $y
	 * @return number
	 */
	public function subtrai($x, $y)
	{
	    $this->validaValoresNumericos($x);
	    $this->validaValoresNumericos($y);
	     
		return $x - $y;
	}
	
	/**
	 * 
	 * @param number $x
	 * @param number $y
	 * @return number
	 */
	public function multiplica($x, $y)
	{
	    $this->validaValoresNumericos($x);
	    $this->validaValoresNumericos($y);
	     
		return $x * $y;
	}
	
	/**
	 * 
	 * @param number $x
	 * @param number $y
	 * @throws \InvalidArgumentException
	 * @return number
	 */
	public function divide($x, $y)
	{
	    $this->validaValoresNumericos($x);
	    $this->validaValoresNumericos($y);
	    
	    if ($y == 0) {
	        throw new \InvalidArgumentException("Não pode dividir por zero!");
	    }
	    
		return $x/$y;
	}
	
	/**
	 * 
	 * @param mixed $valor
	 * @throws InvalidArgumentException
	 */
	protected function validaValoresNumericos($valor)
	{
	   if (!is_numeric($valor)) {
	       throw new \InvalidArgumentException("Apenas números, por favor.");
	   }    
	}
}
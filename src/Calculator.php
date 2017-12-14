<?php

namespace Calc;

class Calculator {
   protected $operands = array();

    public function setOperands(array $operands = array())
    {
        $this->operands = $operands;
        return $this;
    }

    public function addOperand($operand)
    {
        $this->operands[] = $operand;
    }

    public function setOperation(OperationInterface $operation)
    {
        $this->operation = $operation;
        return $this;
    }

    public function process()
    {
        return $this->operation->evaluate($this->operands);
    } 
}


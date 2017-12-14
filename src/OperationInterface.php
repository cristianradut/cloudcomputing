<?php

namespace Calc;

interface OperationInterface {
   public function evaluate(array $operands = array()); 
}


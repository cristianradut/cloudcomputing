<?php

namespace Calc\Operation;

use Calc\OperationInterface;

class Addition implements OperationInterface {
    public function evaluate(array $operands = array())
    {
        return array_sum($operands);
    }
}

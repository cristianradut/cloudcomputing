<?php

namespace Calc\Operation;

use Calc\OperationInterface;

class Substraction implements OperationInterface {
    public function evaluate(array $operands = array())
    {
        $equals = array_shift($operands);

        foreach ($operands as $value) {
            $equals = $equals - $value;
        }

        return $equals;
    }
}

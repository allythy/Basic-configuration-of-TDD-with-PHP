<?php

use PHPUnit\Framework\TestCase;
use App\Models\Calculator;

class CalculadorTest extends TestCase
{
    public function valuesProvider()
    {
        return[
            [1,1,2],
            [2,2,4],
            [5,5,10],

        ];
    }

    /**
    *@dataProvider valuesProvider
    */

    public function testSumValues($valueA, $valueB, $total)
    {
        $calculation = new Calculator;
        $sum = $calculation->sum($valueA, $valueB);

        $this->assertEquals($total, $sum);
    }
}

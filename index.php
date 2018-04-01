<?php

require_once 'vendor/autoload.php';
use App\Models\Calculator;

$calculation = new Calculator;

$sum = $calculation->sum(1,2);
echo "Resultado: " . $sum;

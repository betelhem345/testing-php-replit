<?php

echo '<h1>calcualtor</h1>';
include'Calculator.php';

$myCalc = new Calculator();

echo $myCalc->add(2,2);
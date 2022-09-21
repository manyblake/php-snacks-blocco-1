<?php
$numbers = [];

while (count($numbers) < 15) {
  $number = rand(0, 99);
  if (in_array($number, $numbers) === false) {
    $numbers[] = $number;
  }
}

var_dump($numbers);
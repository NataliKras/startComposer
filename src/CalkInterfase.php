<?php

namespace App;

interface calk
{
    public function plus(float $a, float $b) : float;

    public function minus(float $a, float $b) : float;

    public function multiply(float $a, float $b): float;
    
    public function divide(float $a, float $b): float;
}

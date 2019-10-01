<?php

namespace App;

interface FullCalc
{
    public function plus(float $a, float $b) : float;

    public function minus(float $a, float $b) : float;

    public function multiplication(float $a, float $b) : float;

    public function division(float $a, float $b) : float;

    public function logarithm(float $a, float $b) : float;

    //степень числа
    public function power(float $a, float $b) : float;

    // целочисленное деление
    public function integerDivision(float $a, float $b) : int;

    public function hypotenuse(float $a, float $b) : float;

    // площадь прямоугольника
    public function minus(float $a, float $b) : float;

    // периметр прямоугольника
    public function minus(float $a, float $b) : float;

}
// https://www.php.net/manual/ru/ref.math.php - все выбирал из стандартных функций))) 
// две последних не из стандартный, но по сути та же схема с 2-мя входными числами
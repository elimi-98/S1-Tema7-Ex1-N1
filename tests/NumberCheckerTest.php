<?php

include "src/NumberChecker.php";
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

    public function testClassConstructor(){

     $num1 = new NumberChecker(6);
     $this->assertTrue($num1->isEven());
     $this->assertTrue($num1->isPositive());

     $num2 = new NumberChecker(3);
     $this->assertFalse($num2->isEven());
     $this->assertTrue($num2->isPositive());

     $num3 = new NumberChecker(-6);
     $this->assertTrue($num3->isEven());
     $this->assertFalse($num3->isPositive());

     $num4 = new NumberChecker(-3);
     $this->assertFalse($num4->isEven());
     $this->assertFalse($num4->isPositive());

    }

}
?>
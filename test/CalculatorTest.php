<?php

use PHPUnit\Framework\TestCase;
use App\Libraries\Calculator;

Class CalculatorTest extends TestCase {

  public function setUp() {

    $this->calculator = new Calculator;
  }
  public function inputNumbers() {
    return [
      [2, 2, 4],
      [2.5, 2.5, 5],
      [-3, 1, -2],
      [-9, -9, -18],
    ];

  }
  /**
   * @dataProvider inputNumbers
   *
   * @param [type] $x
   * @param [type] $y
   * @param [type] $sum
   * @return void
   */
  public function testAddNumber($x, $y, $sum) {
 
    $this->assertEquals($sum, $this->calculator->add($x, $y));
    // $this->assertEquals(4, $calc->add(2, 2));
    // $this->assertEquals(5, $calc->add(2.5, 2.5));
    // $this->assertEquals(-2, $calc->add(-3, 1));
  }

  /**
   * @expectedException InvalidArgumentException
   */
  public function testThrowsExceptionIfNonNumericIsPassed() {
    
    $this->calculator->add('a', []);
  }

}

?>
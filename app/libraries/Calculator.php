<?php

namespace App\Libraries;

Class Calculator {

  public function add($a, $b) {
    if (!is_numeric($a) or !is_numeric($b)) {

      throw new \InvalidArgumentException;

    }
    return $a + $b;
  }
}

?>
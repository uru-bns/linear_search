<?php

require_once('./linear_search.php');

class linearSearchTest extends PHPUnit_Framework_TestCase
{
  private $_data;

  public function setUp()
  {
    $this->_data = [10, 1, -1, 5, 3, 8, 0];
  }

  public function test_found()
  {
    $this->assertEquals(2, linear_search($this->_data, -1));
    $this->assertEquals(0, linear_search($this->_data, 10));
    $this->assertEquals(6, linear_search($this->_data, 0));
  }

  public function test_not_found()
  {
    $this->assertEquals(false, linear_search($this->_data, 123));
  }
}

<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    protected $example;
    public function setUp()
    {
        $this->example = new Example();
    }
    public function testIsClassSetup()
    {
        $this->assertTrue($this->example instanceof Example);
    }
}
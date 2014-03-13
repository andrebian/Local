<?php

namespace Local\Data;

use PHPUnit_Framework_TestCase;
use Local\Data\BrazilianState;


class BrazilianStateTest extends PHPUnit_Framework_TestCase
{
    protected $class;
    
    public function setUp()
    {   
        $this->class = new BrazilianState();
        parent::setUp();
    }
    
    public function tearDown()
    {
        parent::tearDown();
    }
    
    public function testInstanceOf()
    {
        $this->assertInstanceOf('Local\Data\BrazilianState', $this->class);
    }
    
    public function testIfMethodGetListExists()
    {
        $this->assertTrue(method_exists($this->class, 'getList'));
    }
    
    public function testIfGetListIsRetrievingAllDataAsArray()
    {
        $this->assertInternalType('array', $this->class->getList());
    }
    
    public function testIfGetListHas27Positions()
    {
        $this->assertEquals(27, count($this->class->getList()));
    }
    
    public function testIfFirstPositionIsAcre()
    {
        $this->assertEquals('Acre', current(array_values($this->class->getList())));
    }
    
    public function testIfLastPositionIsTocantins()
    {
        $states = array_values($this->class->getList());
        $this->assertEquals('Tocantins', end($states));
    }
    
}

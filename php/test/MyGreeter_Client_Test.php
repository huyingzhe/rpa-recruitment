<?php

include_once 'MyGreeter.php';
class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
    
    public function assertEquals()
    {

    }
    public function assertTrue()
    {

    }
}

$object = new MyGreeter_Client_Test();
$object->setUp();
$object->test_Instance();
$object->test_getGreeting();

class PHPUnit_Framework_TestCase{

}

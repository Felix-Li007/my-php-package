<?php
use PHPUnit\Framework\TestCase;
use FelixLi\MyPhpPackage\HelloWorld;

class HelloWorldTest extends TestCase {
    public function testHelloWorld() {
        $helloWorld = new HelloWorld();
       $this->assertEquals("Hello World!", $helloWorld->helloWorld());
    }
}
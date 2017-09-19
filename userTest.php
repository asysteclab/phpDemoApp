<?php
require_once "user.php";
class UserTest extends PHPUnit_Framework_TestCase
{
    public function testTalk() {
        $user = new User();
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
}

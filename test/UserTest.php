<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 23/10/14
 * Time: 20:49
 */

require_once __DIR__ . "/../project/User.php";

class UserTest extends PHPUnit_Framework_TestCase
{
    protected $user;

    protected function setUp() {
        $this->user = new User();
        $this->user->setName("Tom");
    }

    protected function tearDown() {
        unset($this->user);
    }

    // test the talk method
    public function testTalk() {
        $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }
}
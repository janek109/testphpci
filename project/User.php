<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 23/10/14
 * Time: 20:46
 */

class User {
    protected $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function talk() {
        return "Hello world!";
    }
}
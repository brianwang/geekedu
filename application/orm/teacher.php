<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class Teacher extends \Model\User {

    public $primary_key = 'id';

    function _init() {
        self::$relationships = array('blog' => ORM::has_many('\\Model\\Blog'));
        self::$fields = array(
            'id' => ORM::field('auto[10]'),
            'username' => ORM::field('char[64]'),
            'password' => ORM::field('char[255]'),
            'email' => ORM::field('char[255]'),
        );
    }

}

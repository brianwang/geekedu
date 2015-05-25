<?php

namespace Model;

use \Gas\Core;
use \Gas\ORM;

class School extends ORM {

    public $primary_key = 'id';

    function _init() {
        self::$relationships = array(
            'teachers' => ORM::has_many('\\Model\\Teacher'),
            'students' => ORM::has_many('\\Model\\Student'),
        );
        self::$fields = array(
            'id' => ORM::field('auto[10]'),
            'name' => ORM::field('char[64]'),
            'address' => ORM::field('char[255]'),
            'contact' => ORM::field('char[255]'),
        );
    }

}

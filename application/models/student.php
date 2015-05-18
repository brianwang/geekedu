<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


use \Model;

class Student extends User {

    function _init() {
        self::$relationships = array(
            'schools' => ORM::has_many('\\Model\\School'),
            'teachers' => ORM::has_many('\\Model\\Teachers'),
            'friends' => ORM::has_many('\\Model\\User'),
        );
    }

}

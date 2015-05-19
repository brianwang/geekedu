<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author Administrator
 */
class page extends BaseController {

    //put your code here

    function index() {
        $data = array('schools' => array(
                array('name' => '大连理工大学', 'value' => 1),
                array('name' => '北京大学', 'value' => 2),
            ),
            'provinces' => array(
                array('name' => '河南', 'value' => 1),
                array('name' => '北京', 'value' => 2),
            ),
            'cities' => array(
                array('name' => '郑州', 'value' => 1),
                array('name' => '北京', 'value' => 2),
            ),
        );
        $this->smarty->view('index.tpl', $data);
    }

    function register() {
        $this->smarty->view('register.tpl');
    }

    function login() {
        $this->smarty->view('login.tpl');
    }

}

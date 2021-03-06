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
        $this->load->model('UserModel');
        $users = $this->UserModel->get_all();
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
            'users' => $users
        );

        $this->smarty->view('index.tpl', $data);
    }

    function register() {
        $data['curtime'] = base64_encode(time());
        $this->smarty->view('register.tpl');
    }

    function login() {
        $data['curtime'] = base64_encode(time());
        $this->smarty->view('login.tpl', $data);
    }

}

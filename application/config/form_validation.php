<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of form_validation
 *
 * @author Administrator
 */
$config = array(
    'user_valid' => array(
        array(
            'field' => 'email',
            'label' => '邮箱',
            'rules' => 'required'
        ),
        array(
            'field' => 'nickname',
            'label' => '昵称',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'required'
        )
    ),
    'student_valid' => array(
         array(
            'field' => 'uid',
            'label' => '用户id',
            'rules' => 'required'
        ),
        array(
            'field' => 'name',
            'label' => '名字',
            'rules' => 'required'
        ),
        array(
            'field' => 'age',
            'label' => '年龄',
            'rules' => 'required'
        ),
        array(
            'field' => 'gender',
            'label' => '性别',
            'rules' => 'required'
        ),
        array(
            'field' => 'school',
            'label' => '性别',
            'rules' => 'required'
        ),
        array(
            'field' => 'province',
            'label' => '省份',
            'rules' => 'required'
        ),
        array(
            'field' => 'city',
            'label' => '城市',
            'rules' => 'required'
        ),
        array(
            'field' => 'major',
            'label' => '专业',
            'rules' => 'required'
        )
    ),
     'teacher_valid' => array(
         array(
            'field' => 'uid',
            'label' => '用户id',
            'rules' => 'required'
        ),
        array(
            'field' => 'name',
            'label' => '名字',
            'rules' => 'required'
        ),
        array(
            'field' => 'age',
            'label' => '年龄',
            'rules' => 'required'
        ),
        array(
            'field' => 'gender',
            'label' => '性别',
            'rules' => 'required'
        ),
        array(
            'field' => 'school',
            'label' => '性别',
            'rules' => 'required'
        ),
        array(
            'field' => 'province',
            'label' => '省份',
            'rules' => 'required'
        ),
        array(
            'field' => 'city',
            'label' => '城市',
            'rules' => 'required'
        )
        
    ),
    'register' => array(
        array(
            'field' => 'email',
            'label' => '邮箱',
            'rules' => 'required'
        ),
        array(
            'field' => 'nickname',
            'label' => '昵称',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'required'
        ),
        array(
            'field' => 'c_password',
            'label' => '确认密码',
            'rules' => 'required'
        )
    )
);

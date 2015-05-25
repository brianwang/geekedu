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
class auth extends BaseController {

    //put your code here
    //首页
    public function login() {
        if (isset($_SESSION['user'])) {
            redirect_back('正在登陆状态');
        } else {
            $userdata = $this->input->post();
            if ($this->form_validation->run('login') == true) {
                $this->load->model('UserModel');
                $user = $this->UserModel->get_by(array('email' => $userdata['email']));
                if (!empty($user)) {
                    if (md5($userdata['password']) == $user['password']) {
                        $_SESSION['user'] = $user;
                        redirect(site_url('/'));
                    } else {
                        $error = '密码错误';
                        redirect_back($error);
                    }
                } else {
                    $error = '用户不存在';
                    redirect_back($error);
                }
            } else {
                $errors = validation_errors();
                redirect_back($errors);
            }
        }
    }

    public function register() {
        $userdata = $this->input->post();
        if ($this->form_validation->run('register') == true) {
            if ($userdata['password'] == $userdata['c_password']) {
                $this->load->model('UserModel');
                $user = $this->UserModel->get_by(array('email' => $userdata['email']));
                if ($user == null) {
                    $userdata['password'] = md5($userdata['password']);
                    unset($userdata['c_password']);
                    $this->UserModel->insert($userdata, TRUE);
                    $user = $this->UserModel->get_by(array('email' => $userdata['email']));
                    $_SESSION['user'] = $user;
                    redirect(site_url('/'));
                } else {
                    $error = '用户已存在';
                    redirect_back($error);
                }
            } else {
                $error = '确认密码不一致';
                redirect_back($error);
            }
        } else {
            $errors = validation_errors();
            redirect_back($errors);
        }
    }

}

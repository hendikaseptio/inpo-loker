<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function auth()
    {
        // generate password manual lalu copy dan paste saat menambah user di phpmyadmin
        // $pass=password_hash("passadmin", PASSWORD_DEFAULT);
        // echo $pass; die;

        $session = session();
        $model = new \App\Models\User();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $model->where('username', $username)->first();
        // var_dump($data);die;
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'username'     => $data['username'],
                    'is_admin'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username Tidak Ditemukan');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}

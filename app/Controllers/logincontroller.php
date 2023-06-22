<?php

namespace App\Controllers;

class logincontroller extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function home()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == 'admin') {
                return view('login/home');
            } else {
                return view('login');
            }
        } else {
        return view('login');
        }
    }

    public function check()
    {
        $user = $this->request->getPost(['username']);
        $pass = $this->request->getPost(['password']);

        $model = model(loginmodel::class);
        $login = $model->ambil($user);

        if(!empty($login)){
            if($pass['password'] == $login['password']){
                $session = session();
                $session->set('pengguna', $login['username']);
                return redirect()->route('asisten');
            } else {
                return view('login');
            }
        } else {
                return view('login');
        }

    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return redirect()->route('login');
    }
}
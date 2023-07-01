<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_process()
    {
        if (!$this->validate([
            'user_name' => [
                'rules' => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required'  => '{field} Harus diisi',
                    'min_length'  => '{field} Minimal 5 karakter',
                    'max_length'  => '{field} Maksimal 20 karakter',
                ]
            ],
            'user_username' => [
                'rules' => 'required|min_length[5]|max_length[20]|is_unique[users.user_username]',
                'errors' => [
                    'required'  => '{field} Harus diisi',
                    'min_length'  => '{field} Minimal 5 karakter',
                    'max_length'  => '{field} Maksimal 20 karakter',
                    'is_unique'  => 'Username sudah digunakan sebelumnya',
                ]
            ],
            'user_pass' => [
                'rules' => 'required|min_length[8]|max_length[60]',
                'errors' => [
                    'required'  => '{field} Harus diisi',
                    'min_length'  => '{field} Minimal 8 karakter',
                    'max_length'  => '{field} Maksimal 60 karakter',
                ]
            ],
            'pass_confirm' => [
                'rules' => 'matches[user_pass]',
                'errors' => [
                    'matches'  => 'Konfirmasi password tidak sama dengan password',
                ]
            ],
            'user_email' => [
                'rules' => 'required|valid_email|max_length[50]',
                'errors' => [
                    'required'  => '{field} Harus diisi',
                    'valid_email'  => 'Email tidak valid',
                    'max_length'  => '{field} Maksimal 50 karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $user = new UsersModel();
        $user->insert([
            'user_name'  => $this->request->getVar('user_name'),
            'user_username'  => $this->request->getVar('user_username'),
            'user_pass'  => password_hash($this->request->getVar('user_username'), PASSWORD_BCRYPT),
            'user_email'  => $this->request->getVar('user_email'),
        ]);
        return redirect()->to('login');
    }

    function login_process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('user_username');
        $pass = $this->request->getVar('user_pass');
        $user = $users->where(['user_username' => $username])->first();
        if ($user) {
            if (password_verify($pass, $user['user_pass'])) {
                session()->set([
                    'username' => $user['user_username'],
                    'name' => $user['user_name'],
                    'logged_in' => TRUE,
                ]);
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('error', 'Username atau Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    function forgot_password()
    {
        return view('forgot-password');
    }
}

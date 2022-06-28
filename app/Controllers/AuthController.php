<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\User();
    }
    public function registrasi()
    {
        $data = [
            'title' => 'Portal | Register'
        ];
        return view('registrasi', $data);
    }

    public function simpanRegistrasi()
    {
        //1. Mengambil data dari input form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'konfirmasi_password' => $this->request->getPost('konfirmasi_password')
        ];
        // 2. validasi input form
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'konfirmasi_password' => 'required|matches[password]'
        ]);
        // 3. Cek Validasi
        if ($validation->run($data)) {
            //jika berhasil, simpan data dan beri pesan berhasil
            $this->model->save([
                'name' => $data['nama'],
                'email' => $data['email'],
                'password' => password_hash($data['password'], PASSWORD_BCRYPT),
                'role' => 'siswa'
            ]);
            return redirect()->to(base_url('registrasi'))->with('sukses', 'Registrasi berhasil!');
        } else {
            //jika gagal, beri pesan gagal
            $errorMessages = $validation->getErrors();
            return redirect()->to(base_url('registrasi'))->with('gagal', $errorMessages);
        }
    }

    public function login()
    {
        $data = [
            'title' => 'Portal | Login'
        ];
        return view('login', $data);
    }

    public function prosesLogin()
    {
        //1. Ambil data dari form login
        $data = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];
        //2. Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ]);
        if ($validation->run($data)) {
            //a. Jika berhasil, cek di database apakah ada user dengan email sesuai
            $user = $this->model->where('email', $data['email'])->first();
            if ($user) {
                //jika ada, verifikasi password
                $verifikasiPassword =  password_verify($data['password'], $user['password']);
                if ($verifikasiPassword) {
                    //jika berhasil, buat session dan arahkan ke halaman data siswa
                    $sessionData = [
                        'name' => $user['name'],
                        'role' => $user['role'],
                        'logged-in' => TRUE
                    ];
                    session()->set($sessionData);
                    return redirect()->to(base_url('data-siswa'));
                }
            }
        } else {
            //b. Jika validasi input/verifikasi password gagal, beri pesan email/password salah
            return redirect()->to(base_url('login'))->with('gagal', 'Email/password tidak valid');
        }
    }
}

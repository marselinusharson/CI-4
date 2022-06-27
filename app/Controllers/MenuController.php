<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MenuController extends BaseController
{
    public function home()
    {
        $data = [
            'title' => "Beranda"
        ];
        return view('beranda', $data);
    }

    public function infoKegiatan()
    {
        $data = [
            'title' => "Info Kegiatan",
            'kegiatan' => [
                [
                    'tanggal' => "10 Agustus",
                    'kegiatan' => "Masa Orientasi Siswa"
                ],
                [
                    'tanggal' => '17 Agustus',
                    'kegiatan' => 'Upacara Kemerdekaan RI'
                ]
            ]
        ];
        return view('infoKegiatan', $data);
    }

    public function dataSiswa()
    {
        $data = [
            'title' => "Data Siswa",
            'listSiswa' => [
                [
                    'nama' => 'Andi Saputra',
                    'nim' => '101',
                    'semester' => '2'
                ],
                [
                    'nama' => 'Budi Cahya',
                    'nim' => '102',
                    'semester' => '6'
                ]
            ]
        ];
        return view('dataSiswa', $data);
    }
}

<?php

namespace App\Controllers;

use App\Model\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $this->mhs1 = new MahasiswaModel();
        $this->mhs1->id = 1;
        $this->mhs1->nama = 'Fiki Alamsyah';
        $this->mhs1->nim = '011011';
        $this->mhs1->gender = 'L';
        $this->mhs1->tmp_lahir = 'Cirebon';
        $this->mhs1->tgl_lahir = '12 April 2003';
        $this->mhs1->ipk = '3.85';

        $this->mhs2 = new MahasiswaModel();
        $this->mhs2->id = 2;
        $this->mhs2->nama = 'Lutfiah Masida Zulfa';
        $this->mhs2->nim = '011021151';
        $this->mhs2->gender = 'P';
        $this->mhs2->tmp_lahir = 'Bogor';
        $this->mhs2->tgl_lahir = '14 November 2003';
        $this->mhs2->ipk = '3.94';

        $this->mhs3 = new MahasiswaModel();
        $this->mhs3->id = 3;
        $this->mhs3->nama = 'Dhia Aulia';
        $this->mhs3->nim = '01101211510';
        $this->mhs3->gender = 'P';
        $this->mhs3->tmp_lahir = 'Balikpapan';
        $this->mhs3->tgl_lahir = '15 Januari 2003';
        $this->mhs3->ipk = '3.75';

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        return view('mahasiswa/index', $data);
    }
}
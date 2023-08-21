<?php

namespace App\Database\Seeds;

use App\Models\KeteranganModel;
use CodeIgniter\Database\Seeder;

class Keterangan extends Seeder
{
    public function run()
    {
        $data_keterangan = [
            [
                'nama_keterangan' => 'Menunggu analisis data'
            ],
            [
                'nama_keterangan' => 'Sedang dalam analisis'
            ],
            [
                'nama_keterangan' => 'Selesai analisis data'
            ]
        ];
        $keterangan = new KeteranganModel();
        foreach ($data_keterangan as $data) {
            $keterangan->insert($data);
        }
    }
}

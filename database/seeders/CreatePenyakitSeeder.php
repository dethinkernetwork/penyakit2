<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Penyakit Skizofrenia',
                'kode' => 'P001',
                'penyebab' => 'Faktor genetik, kimia',
                'solusi' => 'Terapi Elektrokonvulsif',
                'pencegahan' => 'menenangkan sistem kekebalan otak'
            ],
            [
                'nama' => 'Penyakit Gangguan Bipolar',
                'kode' => 'P002',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],
            [
                'nama' => 'Penyakit Psikopat',
                'kode' => 'P003',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],
            [
                'nama' => 'Penyakit Gangguan Obsesif Komplusif',
                'kode' => 'P004',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],
            [
                'nama' => 'Penyakit Skizoafektif',
                'kode' => 'P005',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],
            [
                'nama' => 'Penyakit Anorexia Nervosa',
                'kode' => 'P006',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],
            [
                'nama' => 'Penyakit Gangguan Kepribadian',
                'kode' => 'P007',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],
            [
                'nama' => 'Penyakit Menyakiti diri Sendiri',
                'kode' => 'P008',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],

            [
                'nama' => 'Penyakit Gangguan Kecemasan',
                'kode' => 'P009',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],

            [
                'nama' => 'Penyakit Gangguan Perhatian/Hiperaktif',
                'kode' => 'P011',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ],

            [
                'nama' => 'Penyakit Gangguan Stress Pascatrauma',
                'kode' => 'P012',
                'penyebab' => '',
                'solusi' => '',
                'pencegahan' => ''
            ]

        ];

        Penyakit::insert($data);
    }
}

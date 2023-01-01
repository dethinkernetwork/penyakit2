<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Seeder;

class CreateRuleSeeder extends Seeder
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
                'kode_penyakit' => 'P001',
                'G001' => true,
                'G002' => true,
                'G003' => true
            ],
            [
                'kode_penyakit' => 'P002',
                'G004' => true,
                'G005' => true,
                'G006' => true
            ],
            [
                'kode_penyakit' => 'P003',
                'G007' => true,
                'G008' => true,
                'G009' => true
            ],
            [
                'kode_penyakit' => 'P004',
                'G010' => true,
                'G011' => true,
                'G012' => true
            ],
            [
                'kode_penyakit' => 'P005',
                'G013' => true,
                'G014' => true,
                'G015' => true
            ],
            [
                'kode_penyakit' => 'P006',
                'G016' => true,
                'G017' => true,
                'G018' => true
            ],
            [
                'kode_penyakit' => 'P007',
                'G019' => true,
                'G020' => true,
                'G021' => true
            ]
            [
                'kode_penyakit' => 'P008',
                'G022' => true,
                'G023' => true,
                'G024' => true
            ]
            [
                'kode_penyakit' => 'P009',
                'G025' => true,
                'G026' => true,
                'G027' => true
            ]
            [
                'kode_penyakit' => 'P010',
                'G028' => true,
                'G029' => true,
                'G030' => true
            ]
            [
                'kode_penyakit' => 'P011',
                'G031' => true,
                'G032' => true,
                'G033' => true
            ]
            [
                'kode_penyakit' => 'P012',
                'G034' => true,
                'G035' => true,
                'G036' => true
            ]
        ];

        foreach($data as $row) {
            Rule::create($row);
        }
    }
}

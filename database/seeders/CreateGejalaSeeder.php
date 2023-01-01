<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
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
                'nama' => ' Cenderung mengasingkan diri',
                'kode' => 'G001'
            ],
            [
                'nama' => ' Mudah marah dan depresi',
                'kode' => 'G002'
            ],
            [
                'nama' => ' Kurang Konsentrasi dan motivasi',
                'kode' => 'G003'
            ],
            [
                'nama' => ' Suasana hati cepat berubah',
                'kode' => 'G004'
            ],
            [
                'nama' => ' Kehilangan minat dalam aktivitas sehari-hari',
                'kode' => 'G005'
            ],
            [
                'nama' => 'Sering berkhayal',
                'kode' => 'G006'
            ],
            [
                'nama' => 'Mudah berbohong',
                'kode' => 'G007'
            ],
            [
                'nama' => 'Melakukan Tindakan tanpa memikirkan resikonya dengan matang',
                'kode' => 'G008'
            ],
            [
                'nama' => 'Tidak mempedulikan orang lain',
                'kode' => 'G009'
            ],
            [
                'nama' => 'Pikiran ragu-ragu yang berlebihan dan keperluan untuk memastikan berulang-ulang',
                'kode' => 'G010'
            ],
            [
                'nama' => 'Pikiran agresif tentang diri sendiri atau orang lain',
                'kode' => 'G011'
            ],
            [
                'nama' => 'Mengulangi kata-kata atau kalimat',
                'kode' => 'G012'
            ],
            [
                'nama' => 'Mendengar suara suara tau melihat hal yang sebetulnya tidak ada',
                'kode' => 'G013'
            ],
            [
                'nama' => 'Mengalami depresi, seperti merasa hampa, sedih, atau tidak berharga',
                'kode' => 'G014'
            ],
            [
                'nama' => 'Kesulitan dalam merawat diri sendiri, termasuk kebersihan dan penampilan fisik',
                'kode' => 'G015'
            ],
            [
                'nama' => 'Ketakutan teramat sangat terhadap penambahan berat badan atau menjadi gemuk, bahkan saat sudah kurus',
                'kode' => 'G016'
            ],
            [
                'nama' => 'Memuntahkan makanan secara sengaja ',
                'kode' => 'G017'
            ],
            [
                'nama' => 'Meminum obat-obatan yang menstimulasi buang air kecil dan buang air besar',
                'kode' => 'G018'
            ],
            [
                'nama' => 'Merasa seperti adanya orang lain di dalam tubuh',
                'kode' => 'G019'
            ],
            [
                'nama' => 'Tidak mampu mengatasi emosi dengan baik',
                'kode' => 'G020'
            ],
            [
                'nama' => 'Perubahan suasana hati yang tidak menentu',
                'kode' => 'G021'
            ],
            [
                'nama' => 'Merasa tidak pantas untuk dicintai',
                'kode' => 'G022'
            ],
            [
                'nama' => 'Kesulitan bersosialisasi',
                'kode' => 'G023'
            ],
            [
                'nama' => 'Selalu menghindari masalah',
                'kode' => 'G024'
            ],
            [
                'nama' => 'Mudah merasa Lelah',
                'kode' => 'G025'
            ],
            [
                'nama' => 'Gelisah terus-terusan',
                'kode' => 'G026'
            ],
            [
                'nama' => 'Mudah tersinggung',
                'kode' => 'G027'
            ],
            [
                'nama' => 'Sulit memusatkan perhatian',
                'kode' => 'G028'
            ],
            [
                'nama' => 'Berperilaku implusif',
                'kode' => 'G029'
            ],
            [
                'nama' => 'Hiperaktif',
                'kode' => 'G030'
            ],
            [
                'nama' => 'Kehilangan minat akan aktivitas yang disukai dulunya ',
                'kode' => 'G031'
            ],
            [
                'nama' => 'Sering terniat kejadian yang membuat trauma',
                'kode' => 'G032'
            ],
            [
                'nama' => 'Sering mengalami mimpi buruk terkait kejadian traumatis',
                'kode' => 'G033'
            ],
            [
                'nama' => 'Tidak mampu memberi respon ketika berinteraksi',
                'kode' => 'G034'
            ],
            [
                'nama' => 'Kesulitan mengekspresikan emosi dan memahami perasaan orang lain dengan baik',
                'kode' => 'G035'
            ],
            [
                'nama' => 'Kerap kali menghindari kontak mata dengan orang lain',
                'kode' => 'G036'
            ]
            
            
        ];

        Gejala::insert($data);
    }
}

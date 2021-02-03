<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sub_kriteria')->insert([
            [
                'id'            => 1,
                'kriteria_id'   => 1,
                'nama'          => '1.000.000 s/d 1.500.000',
                'nilai'         => 1
            ],
            [
                'id'            => 3,
                'kriteria_id'   => 1,
                'nama'          => '501.000 s/d 1.000.000',
                'nilai'         => 2
            ],
            [
                'id'            => 4,
                'kriteria_id'   => 1,
                'nama'          => '200.000 s/d 500.000',
                'nilai'         => 3
            ],
            [
                'id'            => 5,
                'kriteria_id'   => 1,
                'nama'          => '< 200.000',
                'nilai'         => 4
            ],


            [
                'id'            => 6,
                'kriteria_id'   => 2,
                'nama'          => 'tidak memiliki anak',
                'nilai'         => 1
            ],
            [
                'id'            => 7,
                'kriteria_id'   => 2,
                'nama'          => '1 s/d 2 anak',
                'nilai'         => 2
            ],
            [
                'id'            => 8,
                'kriteria_id'   => 2,
                'nama'          => '3 s/d 4 anak',
                'nilai'         => 3
            ],
            [
                'id'            => 9,
                'kriteria_id'   => 2,
                'nama'          => 'lebih dari 5 anak',
                'nilai'         => 4
            ],

            
            [
                'id'            => 17,
                'kriteria_id'   => 3,
                'nama'          => '23 s/d 25',
                'nilai'         => 1
            ],
            [
                'id'            => 10,
                'kriteria_id'   => 3,
                'nama'          => '26 s/d 30',
                'nilai'         => 2
            ],
            [
                'id'            => 11,
                'kriteria_id'   => 3,
                'nama'          => '31 s/d 40',
                'nilai'         => 3
            ],
            [
                'id'            => 12,
                'kriteria_id'   => 3,
                'nama'          => '> 41 tahun',
                'nilai'         => 4
            ],

            [
                'id'            => 13,
                'kriteria_id'   => 4,
                'nama'          => 'belum kawin',
                'nilai'         => 1
            ],
            [
                'id'            => 14,
                'kriteria_id'   => 4,
                'nama'          => 'kawin',
                'nilai'         => 2
            ],
            [
                'id'            => 15,
                'kriteria_id'   => 4,
                'nama'          => 'cerai hidup',
                'nilai'         => 3
            ],
            [
                'id'            => 16,
                'kriteria_id'   => 4,
                'nama'          => 'cerai mati',
                'nilai'         => 4
            ],
            
        ]);

        DB::table('bobot')->insert([
            [
                'id'            => 2,
                'kriteria_id'   => 1,
                'nilai'         => 0.4
            ],
            [
                'id'            => 3,
                'kriteria_id'   => 2,
                'nilai'         => 0.3
            ],
            [
                'id'            => 4,
                'kriteria_id'   => 3,
                'nilai'         => 0.2
            ],
            [
                'id'            => 6,
                'kriteria_id'   => 4,
                'nilai'         => 0.1
            ]
        ]);

        DB::table('alternatif')->insert([
            [
                'id'        => 15,
                'nama'      => "agus", 
                'nik'       => "33111111", 
                'jekel'     => "laki-laki", 
                'alamat'    => "undaan",    
            ],
            [
                'id'        => 17,
                'nama'      => "winda", 
                'nik'       => "331111146", 
                'jekel'     => "perempuan", 
                'alamat'    => "undaan",    
            ],
            [
                'id'        => 18,
                'nama'      => "umi", 
                'nik'       => "331406544433322", 
                'jekel'     => "perempuan", 
                'alamat'    => "undaan",    
            ],
        ]);

        DB::table('alternatif_kriteria')->insert([
       
            [ "alternatif_id" => 15, "kriteria_id" =>  1, "sub_kriteria_id" => 4 ],
            [ "alternatif_id" => 15, "kriteria_id" =>  2, "sub_kriteria_id" => 7 ],
            [ "alternatif_id" => 15, "kriteria_id" =>  3, "sub_kriteria_id" => 11 ],
            [ "alternatif_id" => 15, "kriteria_id" =>  4, "sub_kriteria_id" => 14 ],
            [ "alternatif_id" => 17, "kriteria_id" =>  1, "sub_kriteria_id" => 5 ],
            [ "alternatif_id" => 17, "kriteria_id" =>  2, "sub_kriteria_id" => 6 ],
            [ "alternatif_id" => 17, "kriteria_id" =>  3, "sub_kriteria_id" => 12 ],
            [ "alternatif_id" => 17, "kriteria_id" =>  4, "sub_kriteria_id" => 16 ],
            [ "alternatif_id" => 18, "kriteria_id" =>  1, "sub_kriteria_id" => 4 ],
            [ "alternatif_id" => 18, "kriteria_id" =>  2, "sub_kriteria_id" => 7 ],
            [ "alternatif_id" => 18, "kriteria_id" =>  3, "sub_kriteria_id" => 11 ],
            [ "alternatif_id" => 18, "kriteria_id" =>  4, "sub_kriteria_id" => 14 ],

        ]);


    }
}

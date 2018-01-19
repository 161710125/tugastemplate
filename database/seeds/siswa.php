<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sis = [['nis'=>'34234','nama'=>'M Gema N A','tempat_lahir'=>'Bandung Hehe','tanggal_lahir'=>'1999-08-04','alamat'=>'Jl Test 123','cita_cita'=>'Jadi Manusia','hobi'=>'Ngala Belut','photo'=>'2.jpg'],
        ['nis'=>'4234242','nama'=>'Cristiano Ronaldo','tempat_lahir'=>'Prtugal Euyyyy Bule','tanggal_lahir'=>'1977-01-06','alamat'=>'Madrid Euy','cita_cita'=>'Pesepak Bola','hobi'=>'Main Bolca','photo'=>'ronaldo.png']
    ];
        DB::table('siswas')->insert($sis);
        
    }
}

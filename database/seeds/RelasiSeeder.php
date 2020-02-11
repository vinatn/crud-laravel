<?php

use Illuminate\Database\Seeder;
use \App\Dosen;
use \App\Hobi;
use \App\Mahasiswa;
use \App\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // Membuat data dosen
        $dosen = Dosen::create(array(
            'nipd' => '1234567890',
            'nama' => 'Abdul Musthafa'
        ));
        $this->command->info('Data Dosen Telah Di Isi');

        // Membuat data mahasiswa
        $vina = Mahasiswa::create(array(
            'nama' => 'Vinatn',
            'nim' => '1010101',
            'id_dosen' => $dosen->id
        ));

        $yuli = Mahasiswa::create(array(
            'nama' => 'Yulianti',
            'nim' => '1010102',
            'id_dosen' => $dosen->id
        ));

        $pebi = Mahasiswa::create(array(
            'nama' => 'Pebi',
            'nim' => '1010103',
            'id_dosen' => $dosen->id
        ));
        $this->command->info('Data Mahasiswa Telah Di Isi');

        // Membuat data wali
        $dadang = Wali::create(array(
            'nama' => 'Dadang gelan ',
            'id_mahasiswa' => $vina->id
        ));

        $usup = Wali::create(array(
            'nama' => 'Ucup icip',
            'id_mahasiswa' => $yuli->id
        ));

        $agus = Wali::create(array(
            'nama' => 'Agus alim',
            'id_mahasiswa' => $pebi->id
        ));
        $this->command->info('Data Wali Telas Di Isi');

        // Membuat data hobi
        $melukis_langit = Hobi::create(array('hobi' => 'Melukis langit'));
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi hujan'));
        $ambyar = Hobi::create(array('hobi' => 'Stalking mantan'));
        

        $vina->hobi()->attach($melukis_langit->id);
        $vina->hobi()->attach($ambyar->id);
        $yuli->hobi()->attach($mandi_hujan->id);
        $pebi->hobi()->attach($ambyar->id);

        $this->command->info('Data Hobi Telah Di Isi');
    }
}

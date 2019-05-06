<?php

use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanan')->insert([
            'id' => 1,
            'jenis_layanan' => 'Teknisi Datang ke Rumah',]);
        DB::table('layanan')->insert([
            'id' => 2,
            'jenis_layanan' => 'Datang ke Tempat Servis',]);
        DB::table('layanan')->insert([
            'id' => 3,
            'jenis_layanan' => 'Kirim Barang ke Tempat Servis',]);        
    }
}

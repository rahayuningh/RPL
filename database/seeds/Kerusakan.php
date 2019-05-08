<?php

use Illuminate\Database\Seeder;

class KerusakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kerusakan')->insert([
            'id' => 1,
            'jenis_kerusakan' => 'Baterai',
            'biaya' => 1000,]);
        DB::table('kerusakan')->insert([
            'id' => 2,
            'jenis_kerusakan' => 'Layar',
            'biaya' => 20000,]);
        DB::table('kerusakan')->insert([
            'id' => 3,
            'jenis_kerusakan' => 'Port',
            'biaya' => 300000,]);
    }
}

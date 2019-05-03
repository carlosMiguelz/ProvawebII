<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('tipos')->insert([
        'name' => 'projetor',
        ]);      
         DB::table('tipos')->insert([
        'name' => 'caixa de som',
        ]);      
         DB::table('tipos')->insert([
        'name' => 'microfone',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\model_inventaris;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_inventaris')->insert([
        	[
        		'nama'=>'sapu',
        		'spesifikasi'=>'berbulu',
        		'tahun'=>Carbon::now(),
        		'harga'=>'223',
        		'foto'=>'sapu.jpg',
        		'jumlah'=>'99',
        		'satuan'=>'ribuan',
        		'kondisi'=>'patah bro'
        	]
        ]);
    }
}

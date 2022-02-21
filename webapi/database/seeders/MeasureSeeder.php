<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measures')->insert([
            'value' => '12',
            'type' => 'pm25',
            'created_at' => Carbon::now(),
        ]);
        DB::table('measures')->insert([
            'value' => '13',
            'type' => 'pm25',
            'created_at' => Carbon::now(),
        ]);
        DB::table('measures')->insert([
            'value' => '120',
            'type' => 'pm25',
            'created_at' => Carbon::now(),
        ]);
        DB::table('measures')->insert([
            'value' => '120',
            'type' => 'pm10',
            'created_at' => Carbon::now(),
        ]);
    }
}

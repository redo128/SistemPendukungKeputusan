<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlternatifScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alternatif')->insert([
            [
                'alternatif_id'=>'1',
                'kriteriabobot_id'=>'2',
                'kriteriarating_id'=>'3'
            ]
            ]);
    }
}

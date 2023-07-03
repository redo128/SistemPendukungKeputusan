<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alternatif')->insert([
            [
                'nama'=>'A1'
            ],
            [
                'nama'=>'A2'
            ],
            [
                'nama'=>'A3'
            ],
            [
                'nama'=>'A4'
            ],
            [
                'nama'=>'A5'
            ],
            [
                'nama'=>'A6'
            ],
            [
                'nama'=>'A7'
            ],
            [
                'nama'=>'A8'
            ],
            [
                'nama'=>'A9'
            ],
            [
                'nama'=>'A10'
            ],
            [
                'nama'=>'A11'
            ],
            [
                'nama'=>'A12'
            ],
            [
                'nama'=>'A13'
            ],
            [
                'nama'=>'A14'
            ],
            [
                'nama'=>'A15'
            ],
            [
                'nama'=>'A16'
            ],
            [
                'nama'=>'A17'
            ],
            [
                'nama'=>'A18'
            ],
            [
                'nama'=>'A19'
            ],
            [
                'nama'=>'A20'
            ],
            ]);
    }
}

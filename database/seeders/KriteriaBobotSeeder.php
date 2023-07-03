<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class KriteriaBobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriteriabobot')->insert([
            [
                'name'=>'C1',
                'type'=>'benefit',
                'weight'=>0.25,
                'description'=>'Usia'
            ],
            [
                'name'=>'C2',
                'type'=>'benefit',
                'weight'=>1.0,
                'description'=>'Pendidikan'
            ],
            [
                'name'=>'C3',
                'type'=>'benefit',
                'weight'=>0.5,
                'description'=>'jabtan'
            ],
            [
                'name'=>'C4',
                'type'=>'benefit',
                'weight'=>0.5,
                'description'=>'Pangkat/golongan'
            ],
            [
                'name'=>'C5',
                'type'=>'benefit',
                'weight'=>1.0,
                'description'=>'Jumlah Simpanan Wajib'
            ],
            [
                'name'=>'C6',
                'type'=>'benefit',
                'weight'=>0.75,
                'description'=>'Jumlah Simpanan Sukarela'
            ],
            [
                'name'=>'C7',
                'type'=>'cost',
                'weight'=>1.0,
                'description'=>'Jumlah Utang Unit'
            ],
            [
                'name'=>'C8',
                'type'=>'cost',
                'weight'=>0.75,
                'description'=>'Jumlah Angsuran Utang Unit'
            ],
            [
                'name'=>'C9',
                'type'=>'cost',
                'weight'=>1.0,
                'description'=>'Sisa Angsuran Utang Unit'
            ],
            [
                'name'=>'C10',
                'type'=>'cost',
                'weight'=>0.75,
                'description'=>'Sisa Angsuran Utang Faktor'
            ],
            ]);
    }
}

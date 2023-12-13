<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->delete();

        DB::table('branches')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'EXCEDENTES ECOINDUSTRIALES LA QUINTA S.A.S.',
                'address' => 'CL 5 16 22 BRR COMUNEROS',
                'phone' => '3134468537',
                'mobile' => '3134468537',
                'email' => 'exceecolaquinta@hotmail.com',
                'manager' => 'CIRO ALFONSO ANGARITA',
                'department_id' => 21,
                'municipality_id' => 846,
                'company_id' => 1,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),
        ));
    }
}

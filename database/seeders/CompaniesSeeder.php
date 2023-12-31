<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();

        DB::table('companies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'EXCEDENTES ECOINDUSTRIALES LA QUINTA S.A.S.',
                'nit' => '901286970',
                'dv' => '5',
                'address' => 'CL 5 16 22 BRR COMUNEROS',
                'phone' => '3134468537',
                'api_token' => '0',
                'email' => 'exceecolaquinta@hotmail.com',
                'emailfe' => 'exceecolaquinta@hotmail.com',
                'imageName' => 'noimage.jpg',
                'logo' => '/storage/images/logos/noimage.jpg',
                'department_id' => 21,
                'municipality_id' => 846,
                'identification_type_id' => 6,
                'liability_id' => 117,
                'organization_id' => 1,
                'regime_id' => 2,
                'created_at' => '2023-01-12 21:07:42',
                'updated_at' => '2023-01-12 21:07:42',
            ),
        ));


    }
}

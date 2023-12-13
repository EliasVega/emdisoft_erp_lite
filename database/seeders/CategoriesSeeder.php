<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'CHATARRA MIXTA',
                'description' => 'CHATARRA MIXTA',
                'utility_rate' => '30.00',
                'status' => 'inactive',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 14:33:50',
                'updated_at' => '2023-12-07 21:56:14'
                ),
            1 =>
            array (
                'id' => 2,
                'name' => 'HIERRO GRIS',
                'description' => 'HIERRO GRIS',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 14:34:21',
                'updated_at' => '2023-12-07 21:51:32'
                ),
            2 =>
            array (
                'id' => 3,
                'name' => 'CHATARRA ESPECIAL',
                'description' => 'CHATARRA ESPECIAL',
                'utility_rate' => '30.00',
                'status' => 'inactive',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 15:51:08',
                'updated_at' => '2023-12-07 21:56:22'
                ),
            3 =>
            array (
                'id' => 4,
                'name' => 'CANASTAS',
                'description' => 'CANASTAS',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:20:21',
                'updated_at' => '2023-12-07 16:20:21'
                ),
            4 =>
            array (
                'id' => 5,
                'name' => 'PLASTICO',
                'description' => 'PLASTICO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:21:16',
                'updated_at' => '2023-12-07 16:21:16'
                ),
            5 =>
            array (
                'id' => 6,
                'name' => 'ARCHIVO',
                'description' => 'ARCHIVO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:21:42',
                'updated_at' => '2023-12-07 16:21:42'
                ),
            6 =>
            array (
                'id' => 7,
                'name' => 'CARTON',
                'description' => 'CARTON',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:22:01',
                'updated_at' => '2023-12-07 16:22:01'
                ),
            7 =>
            array (
                'id' => 8,
                'name' => 'VIDRIO',
                'description' => 'VIDRIO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:22:22',
                'updated_at' => '2023-12-07 16:22:22'
                ),
            8 =>
            array (
                'id' => 9,
                'name' => 'PERIODICO',
                'description' => 'PERIODICO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:22:46',
                'updated_at' => '2023-12-07 16:22:46'
                ),
            9 =>
            array (
                'id' => 10,
                'name' => 'ALUMINIO',
                'description' => 'ALUMINIO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:23:52',
                'updated_at' => '2023-12-07 21:57:28'
                ),
            10 =>
            array (
                'id' => 11,
                'name' => 'COBRE',
                'description' => 'COBRE',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:24:10',
                'updated_at' => '2023-12-07 16:24:10'
                ),
            11 =>
            array (
                'id' => 12,
                'name' => 'RADIADOR',
                'description' => 'RADIADOR',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:24:40',
                'updated_at' => '2023-12-07 16:24:40'
                ),
            12 =>
            array (
                'id' => 13,
                'name' => 'UNIDAD NEV',
                'description' => 'UNIDAD NEV',
                'utility_rate' => '30.00',
                'status' => 'inactive',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:25:13',
                'updated_at' => '2023-12-12 12:07:27'
                ),
            13 =>
            array (
                'id' => 14,
                'name' => 'VIRUTA',
                'description' => 'VIRUTA',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:25:30',
                'updated_at' => '2023-12-07 16:25:30'
                ),
            14 =>
            array (
                'id' => 15,
                'name' => 'BATERIAS',
                'description' => 'BATERIAS',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:25:55',
                'updated_at' => '2023-12-07 16:25:55'
                ),
            15 =>
            array (
                'id' => 16,
                'name' => 'VIRUTA_BR',
                'description' => 'VIRUTA_BR',
                'utility_rate' => '30.00',
                'status' => 'inactive',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:29:50',
                'updated_at' => '2023-12-12 12:06:55'
                ),
            16 =>
            array (
                'id' => 17,
                'name' => 'ACERO',
                'description' => 'ACERO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:30:07',
                'updated_at' => '2023-12-07 16:30:07'
                ),
            17 =>
            array (
                'id' => 18,
                'name' => 'PLOMO',
                'description' => 'PLOMO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 16:30:27',
                'updated_at' => '2023-12-07 16:30:27'
                ),
            18 =>
            array (
                'id' => 19,
                'name' => 'CHATARRA',
                'description' => 'CHATARRA',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-07 21:56:50',
                'updated_at' => '2023-12-07 21:56:50'
                ),
            19 =>
            array (
                'id' => 20,
                'name' => 'ANTIMONIO',
                'description' => 'ANTIMONIO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:09:04',
                'updated_at' => '2023-12-12 12:09:04'
                ),
            20 =>
            array (
                'id' => 21,
                'name' => 'SALCHICHA',
                'description' => 'SALCHICHA',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:09:29',
                'updated_at' => '2023-12-12 12:09:29'
                ),
            21 =>
            array (
                'id' => 22,
                'name' => 'PLANCHA Y BANDA',
                'description' => 'PLANCHA Y BANDA',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:09:52',
                'updated_at' => '2023-12-12 12:09:52'
                ),
            22 =>
            array (
                'id' => 23,
                'name' => 'PASTA',
                'description' => 'PASTA',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:11:46',
                'updated_at' => '2023-12-12 12:11:46'
                ),
            23 =>
            array (
                'id' => 24,
                'name' => 'PANAM',
                'description' => 'PANAM',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:12:05',
                'updated_at' => '2023-12-12 12:12:05'
                ),
            24 =>
            array (
                'id' => 25,
                'name' => 'CD LIMPIO',
                'description' => 'CD LIMPIO',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:12:29',
                'updated_at' => '2023-12-12 12:12:29'
                ),
            25 =>
            array (
                'id' => 26,
                'name' => 'CELULARES',
                'description' => 'CELULARES',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:12:50',
                'updated_at' => '2023-12-12 12:12:50'
                ),
            26 =>
            array (
                'id' => 27,
                'name' => 'TAPA PLASTICA',
                'description' => 'TAPA PLASTICA',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:13:09',
                'updated_at' => '2023-12-12 12:13:09'
                ),
            27 =>
            array (
                'id' => 28,
                'name' => 'RESISTENCIA',
                'description' => 'RESISTENCIA',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:13:22',
                'updated_at' => '2023-12-12 12:13:22'
                ),
            28 =>
            array (
                'id' => 29,
                'name' => 'RINES',
                'description' => 'RINES',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:13:41',
                'updated_at' => '2023-12-12 12:13:41'
                ),
            29 =>
            array (
                'id' => 30,
                'name' => 'UNIDADES NEV',
                'description' => 'UNIDADES NEV',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:14:14',
                'updated_at' => '2023-12-12 12:14:14'
                ),
            30 =>
            array (
                'id' => 31,
                'name' => 'MATERIAL',
                'description' => 'MATERIAL',
                'utility_rate' => '30.00',
                'status' => 'active',
                'company_tax_id' => 1,
                'created_at' => '2023-12-12 12:14:29',
                'updated_at' => '2023-12-12 12:14:29'
            )	,
        ));
    }
}

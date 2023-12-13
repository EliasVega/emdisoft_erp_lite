<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(IndicatorsSeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(ArlSeeder::class);
        $this->call(BanksSeeder::class);
        $this->call(CardsSeeder::class);
        $this->call(IdentificationTypesSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(MunicipalitiesSeeder::class);
        $this->call(PostalCodeSeeder::class);
        $this->call(DocumentTypesSeeder::class);
        $this->call(LiabilitiesSeeder::class);
        $this->call(EnvironmentSeeder::class);
        $this->call(OrganizationsSeeder::class);
        $this->call(RegimesSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(IndicatorSeeder::class);
        $this->call(BranchesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(VerificationCodeSeeder::class);
        $this->call(TaxTypeSeeder::class);
        $this->call(PercentagesSeeder::class);
        $this->call(CompanyTaxSeeder::class);
        $this->call(MeasureUnitsSeeder::class);
        $this->call(DiscrepanciesSeeder::class);
        $this->call(ContratTypesSeeder::class);
        $this->call(ChargesSeeder::class);
        $this->call(EmployeeSubtypesSeeder::class);
        $this->call(EmployeeTypesSeeder::class);
        $this->call(PaymentFrecuenciesSeeder::class);
        $this->call(GenerationTypeSeeder::class);
        $this->call(ProvidersSeeder::class);
        //$this->call(CustomersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(BranchProductsSeeder::class);
        $this->call(VoucherTypeSeeder::class);
        $this->call(ResolutionSeeder::class);
        $this->call(PaymentFormsSeeder::class);
        $this->call(PaymentMethodsSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(RestaurantTableSeeder::class);
        $this->call(RawMaterialSeeder::class);
        $this->call(ProductRawmaterialSeeder::class);
        $this->call(BranchRawmaterialsSeeder::class);
    }
}

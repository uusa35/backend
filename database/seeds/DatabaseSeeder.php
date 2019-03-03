<?php

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

        $this->call(CountriesTableSeeder::class);
        $this->call(PrivilegesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PoliciesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(NewslettersTableSeeder::class);
        $this->call(ShipmentPackgesTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(TimingsTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(AboutusTableSeeder::class);
        $this->call(SurveysTableSeeder::class);
        $this->call(QuestionnairesTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(QuotesTableSeeder::class);
        $this->call(CommercialsTableSeeder::class);


    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            ProvinceSeeder::class,
            DistrictSeeder::class,
            UserSeeder::class,
            PeopleSeeder::class,
            CrimeRegisterRecordInformationSeeder::class,
            provinceAccount::class,
            CasesTableSeeder::class,
            SuspectsSeeder::class,
            CriminalsTableSeeder::class,

        ]);
        $this->call(PeopleTableSeeder::class);
        $this->call(SuspectSeeder::class);
    }
}

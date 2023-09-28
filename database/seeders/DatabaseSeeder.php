<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Agent;
use App\Models\Autorisation;
use App\Models\Capitaine;
use App\Models\Capture;
use App\Models\Demande;
use App\Models\Document;
use App\Models\Navire;









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

        // $this->call(RoleSeeder::class);
        // $this->call(StatutSeeder::class);
      // User::factory(10)->create();
    //     Agent::factory(10)->create();
    //    Autorisation::factory(10)->create();
    //    Capitaine::factory(10)->create();
    //     Capture::factory(10)->create();
          Demande::factory(50)->create();
        //  Document::factory(10)->create();
          Navire::factory(60)->create();

    }
}

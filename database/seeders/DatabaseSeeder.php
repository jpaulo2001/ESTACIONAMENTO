<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\Project;
use App\Models\ProjectEvent;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(DefaultUserSeeder::class);

        if (App::environment() == 'local') {
            User::factory()->count(20)->create();
            Customer::factory()->count(50)->create();
            Project::factory()->count(50)->create();
            ProjectEvent::factory()->count(50)->create();
            Vehicle::factory()->count(20)->create();

        }
    }
}

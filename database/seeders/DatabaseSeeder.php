<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ShieldSeeder::class,
        ]);
        User::factory(20)->create();

        User::factory()->create([
            'name' => 'Showrabh',
            'email' => 'a@a.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('super_admin');

        DB::table('banners')->insert([
            'heading' => 'New Visa is here'
        ]);

    }
}

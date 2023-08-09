<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Country;
use \App\Models\City;
use \App\Models\Tag;

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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'United Kingdom']);
        Country::create(['name' => 'Greece']);
        Country::create(['name' => 'India']);

        City::create(['country_id'=>1, 'name'=>'London']);
        City::create(['country_id'=>1, 'name'=>'Liverpool']);
        City::create(['country_id'=>1, 'name'=>'Leicester']);
        City::create(['country_id'=>2, 'name'=>'Athens']);
        City::create(['country_id'=>2, 'name'=>'Patra']);
        City::create(['country_id'=>2, 'name'=>'Zakynthos']);
        City::create(['country_id'=>3, 'name'=>'Kolkata']);
        City::create(['country_id'=>3, 'name'=>'Mumbai']);
        City::create(['country_id'=>3, 'name'=>'Jaipur']);

        Tag::create(['name'=>'Laravel', 'slug'=>'laravel']);
        Tag::create(['name'=>'Vue JS', 'slug'=>'vue-js']);
        Tag::create(['name'=>'Livewire', 'slug'=>'livewire']);

    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\savon_listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
     
    public function run(): void
    {
         \App\Models\User::factory(10)->create();


           savon_listings::factory(10)->create();
        //  savon_listing::create([
        //    'Title' => 'Plumber',
        //    'Tags' => 'vocational, labor',
        //    'Company' => 'pz',
        //    'Email' => 'busy@gmail.com',
        //    'Description' => 'Test User'
           
  
        // ]);

        // \App\Models\savon_listings::create([
        //     'Title' => 'Health Workr',
        //     'Tags' => 'Nursing, Healthcare',
        //     'Company' => 'NHS',
        //     'Email' => 'bus@gmail.com',
        //     'Description' => 'social worker',
        //  ]);

        //  \App\Models\savon_listings::create([
        //     'Title' => 'computer prorammer',
        //     'Tags' => 'php, javascript',
        //     'Company' => 'google',
        //     'Email' => 'tech@gmail.com',
        //     'Description' => 'tech  man',
        //  ]);
    }

    
}

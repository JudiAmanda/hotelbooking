<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //populate the states table
         \DB::table('states')->insert([
            ['state_name' => "Abuja", 
            'created_at' => now(),
            'updated_at' =>  now(),
        ],
            ['state_name' => "Lagos",
            'created_at' => now(),
            'updated_at' =>  now(),
        ],
            ['state_name' => "Port Harcourt",
            'created_at' => now(),
            'updated_at' =>  now(),
        ],
            ['state_name' => "Delta",
            'created_at' => now(),
            'updated_at' =>  now(),
        ],
            ['state_name' => "Anambra",
            'created_at' => now(),
            'updated_at' =>  now(),
        ],

    ]);

    }
}

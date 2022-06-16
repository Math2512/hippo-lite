<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $entity = \App\Models\Entity::factory(1)->create()->each(function($e) {
            \App\Models\User::factory(1)->create(['entity_id' => $e->id ]);
            \App\Models\Contact::factory(10)->create(['entity_id' => $e->id ]);
        });
        dd('Seeder: ok');
    }
}

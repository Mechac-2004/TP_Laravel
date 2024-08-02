<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Categories::create([
            'name' => 'Professionnel',
        ]);
        Categories::create([
            'name' => 'Personnel',
        ]);
        Categories::create([
            'name' => 'Études',
        ]);
        Categories::create([
            'name' => 'Ménage',
        ]);
        Categories::create([
            'name' => 'Urgent et important',
        ]);
        Categories::create([
            'name' => 'Important mais non urgent',
        ]);
        Categories::create([
            'name' => 'Urgent mais non important',
        ]);
        Categories::create([
            'name' => 'Ni urgent ni important',
        ]);
    }
}

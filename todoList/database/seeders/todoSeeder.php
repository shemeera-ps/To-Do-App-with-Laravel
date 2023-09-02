<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\todo;
class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        todo::factory(10)->create();
    }
}

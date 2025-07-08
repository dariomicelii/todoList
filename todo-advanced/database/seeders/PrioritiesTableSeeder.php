<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\Priority;
use Faker\Generator as Faker;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $priorities = [
            ['name' => 'High', 'color' => '#ff0000'],
            ['name' => 'Medium', 'color' => '#ffa500'],
            ['name' => 'Low', 'color' => '#008000'],
        ];

        foreach ($priorities as $priority) {
            $newPriority = new Priority();

            $newPriority->name = $priority['name'];
            $newPriority->color = $priority['color'];

            $newPriority->save();
        }
    }
}

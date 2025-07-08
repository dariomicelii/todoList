<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Faker\Generator as Faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i<10; $i++) {
            $newTask = new Task();

            $newTask->title = $faker->sentence();
            $newTask->date = $faker->date();
            $newTask->note = $faker->paragraph(12);

            $newTask->save();

        };
    }
}

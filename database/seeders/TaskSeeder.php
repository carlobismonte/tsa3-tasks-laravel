<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $tasks = [
            ['title' => 'Review Laravel lessons', 'status' => 'completed', 'task_date' => today()->subDay()],
            ['title' => 'Study PHP basics', 'status' => 'pending', 'task_date' => today()->subDay()],

            ['title' => 'Complete TSA3 activity', 'status' => 'pending', 'task_date' => today()],
            ['title' => 'Practice Laravel migrations', 'status' => 'completed', 'task_date' => today()],
            ['title' => 'Review Eloquent models', 'status' => 'pending', 'task_date' => today()],
            ['title' => 'Update GitHub repository', 'status' => 'pending', 'task_date' => today()],

            ['title' => 'Prepare project documentation', 'status' => 'pending', 'task_date' => today()->addDay()],
            ['title' => 'Test Laravel application', 'status' => 'pending', 'task_date' => today()->addDay()],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}

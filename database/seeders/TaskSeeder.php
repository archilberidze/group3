<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\task;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'tittle' => 'task 1',
                'description' => 'This is the first task',
                'status' => 'pending',
            ],
            [
                'tittle' => 'task 2',
                'description' => 'This is the second task',
                'status' => 'pending',
            ],
            [
                'tittle' => 'task 3',
                'description' => 'This is the third task',
                'status' => 'pending',
            ],
            [
                'tittle' => 'task 4',
                'description' => 'This is the fourth task',
                'status' => 'completed',  
            ],
        ];

        foreach ($tasks as $task) {
            task::create($task); 
        }
    }
}

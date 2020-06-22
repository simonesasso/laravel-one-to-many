<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;
class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Task::class, 100)->make()->each(function($task){

        $employee = Employee::inRandomOrder()->first();
        // la funzione employee() è quella definita nel model Task per stabilire la relazione
        $task -> employee()->associate($employee);
        $task->save();
      });
    }
}

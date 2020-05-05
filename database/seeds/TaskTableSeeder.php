<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task(['title'=>'Some task']);
        $task->save();
        $task = new Task(['title'=>'Make a cake']);
        $task->save();
        $task = new Task(['title'=>'Do homework']);
        $task->save();
        $task = new Task(['title'=>'Go to gym']);
        $task->save();
    }
}

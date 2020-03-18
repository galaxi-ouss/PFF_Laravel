<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class taskController extends Controller
{
    function add(Request $request){
        $nom = $request->input('nom');

        $task = new Task();

        $task->nom = $nom;

        $task->save();
        return $task;
    }
}

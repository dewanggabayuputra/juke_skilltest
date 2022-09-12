<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todos::all();
        return view('todos', ['todos'=> $todos]);
    }
}

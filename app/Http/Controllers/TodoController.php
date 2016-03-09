<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

use App\Http\Requests;

class TodoController extends Controller
{
    function index(){
        $todos = Todo::all();
        return view('todo.index', ['todos' => $todos]);
    }

    function create(){
        return view('todo.create');
    }

    function store(Request $request){
        Todo::create($request->all());
        return redirect()->route('todo.index');
    }
}

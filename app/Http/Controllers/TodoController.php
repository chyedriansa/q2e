<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use DB;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        $data = [
            'todos' => $todos
        ];
        return view('todos.index', $data);
    }

    public function create()
    {
        return view('todos.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $todo = Todo::create($request->all());
        return redirect('/');
    }
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }
    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());

        return redirect('/');
    }
}

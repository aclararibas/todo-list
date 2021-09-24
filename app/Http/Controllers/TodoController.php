<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('completed')->get(); //orderBy allows me to order all of my tasks under any type of determined specification
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request) //created a new request to validate first and THEN execute the determined action
    {
        Todo::create($request->all()); //show successful message on screen when button is clicked and redirect @ create page
        return redirect()->back()->with('message', 'Task Created Successfully!');
    }

    public function edit(Todo $todo)
    { //rout model biding will find the variable name inside the curly braces defined at routes, and it will automatically find the to.do data with the ID I gave in this model - read Laravel Documentation
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Congrats, your task has been successfully updated!');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed' => true]); //completed is something to be manipulated, so it NEEDS to go inside To.do Model
        return redirect()->back()->with('message', 'Done! Task marked as completed.');
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(['completed' => false]);
        return redirect()->back()->with('message', 'Done! Task marked as not completed.');
    }

    public function delete(Todo $todo)
    {
        $todo->delete(); //with no parameters inside
        return redirect()->back()->with('message', 'Done! Task deleted.');
    }
}

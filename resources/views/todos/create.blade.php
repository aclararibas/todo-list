@extends('todos.layout')

@section('content')
    <h1 class="text-2xl text-gray-800 border-b-2 border-indigo-100 pb-4">New Task</h1>
    <x-alert></x-alert> <!-- command used to display the component named after it; in that case, alert -->
    <form class="py-5" method="post" action="/todos/create">
    @csrf <!-- this is a token -->
        <input class="py-2 px-10 border border-indigo-600 rounded text-gray-600" type="text" name="title">
        <input class="py-2 px-7 mx-2 border rounded bg-indigo-600 text-white cursor-pointer hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50" type="submit" value="Create">
        <a href="/todos" class="py-3 px-6 border rounded bg-transparent hover:bg-yellow-500 text-yellow-500 hover:text-white border border-yellow-500 hover:bg-yellow-500">Back</a>
    </form>
@endsection

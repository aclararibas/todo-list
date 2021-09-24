@extends('todos.layout')

@section('content')
    <div class="flex justify-center border-b-2 border-indigo-100 pb-4">
        <h1 class="text-2xl pr-2 text-gray-800">Task Manager</h1>
        <a href="/todos/create"
           class="mx-2 text-indigo-600 cursor-pointer text-white"><i class="fas fa-plus-square fa-2x"></i></a>
    </div>

    <ul class="my-5">
        <x-alert></x-alert>
        @foreach ($todos as $todo)
            <li class="flex justify-between py-2 p-9">

            @if($todo->completed) <!-- cross out task if it's marked as completed -->
                <p class="line-through">{{$todo->title}}</p>
                @else
                    <p>{{$todo->title}}</p>
                @endif

                <div>
                    @include('components.completeButton')

                    <a href="{{'/todos/'.$todo->id.'/edit'}}"
                       class="mx-2 py-2 text-yellow-500 cursor-pointer text-white"><i
                            class="fas fa-edit fa-lg px-2"></i></a> <!-- a href allows me to edit a specific id -->

                    @include('components.trashButton')

                </div>
            </li>
        @endforeach
    </ul>
@endsection

@if($todo->completed) <!-- change color of task if it's marked as completed -->
    <i class="fas fa-check text-green-400 cursor-pointer fa-lg px-2 py-2"
       onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()"></i>
    <!-- onclick event allows me to mark task effectively as complete/incomplete alongside the form's action and id -->

    <form action="{{route('todo.incomplete', $todo->id)}}" id="{{'form-incomplete-'.$todo->id}}" style="display: none"
          method="post"> <!-- form action allows me to specify the route and to specify the parameter -->
    @csrf
    @method('put') <!-- this is an override of the method set above -->
    </form>

    @else
        <i class="fas fa-check text-gray-300 cursor-pointer fa-lg px-2 py-2"
           onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()"></i>
        <!-- onclick event allows me to mark task effectively as complete/incomplete alongside the form's action and id -->

        <form action="{{route('todo.complete', $todo->id)}}" id="{{'form-complete-'.$todo->id}}" style="display: none"
              method="post"> <!-- form action allows me to specify the route and to specify the parameter -->
        @csrf
        @method('put') <!-- this is an override of the method set above-->
        </form>
    @endif

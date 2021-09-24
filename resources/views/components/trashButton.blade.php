<i class="fas fa-trash fa-lg px-2 text-red-500 cursor-pointer text-white"
   onclick="event.preventDefault();document.getElementById('form-delete-{{$todo->id}}').submit()"></i>

<form action="{{route('todo.delete', $todo->id)}}" id="{{'form-delete-'.$todo->id}}" style="display: none"
      method="post"> <!-- form action allows me to specify the route and to specify the parameter -->
@csrf
@method('delete') <!-- this is an override of the method set above-->
</form>

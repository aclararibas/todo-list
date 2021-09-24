<div> <!-- this piece of code will be responsible for showing successful/error message on screen -->
@if(session()->has('message'))
    {{$slot}}
    <div class="py-5 px-2 mt-4 mb-1 bg-green-200">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    {{$slot}}
    <div class="py-5 px-2 mt-4 mb-1 bg-red-200">{{session()->get('error')}}</div>
    @endif

    @if ($errors->any()) <!-- this piece of code was taken out of Laravel Documentation and it is useful to catch any validation errors -->
        <div class="py-5 px-2 mt-4 mb-1 bg-red-200">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

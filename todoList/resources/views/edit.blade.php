@extends('layouts')
 
@section('content')
        <form action="{{ route('todos.update',$task->id) }}" method="post" class="flex  mt-4 w-5/6 mx-auto mb-8 ">
            @csrf
            @method('PUT')
            @if(!$task->completed)
                <input type="checkbox" id="completed"class="mr-2" name="completed" {{ $task->completed ? 'checked' : '' }}>
            @else
                <input type="checkbox" id="completed" class="mr-2" name="completed" {{ $task->completed ? 'checked' : '' }}>
            @endif
            <input type="text" name="task" id=""value="{{ $task->task }}" placeholder="Update your task.. " class="w-full text-center p-2 text-black font-bold rounded-xl">
            <button type="submit" class="ml-2 w-40 h-14 ml-4 bg-red-300 rounded-xl shadow ">UPDATE</button>
        </form>
        <a href="{{ route('todos.index') }}" class="flex  mt-36"><i class="fa-solid fa-backward text-white text-xl"></i></a>
      <div class=""></div>
@endsection 
@extends('layouts')
 
@section('content')
        <form action="{{ route('todos.store') }}" method="post" class="flex mt-4 w-5/6 mx-auto mb-8 ">
            @csrf
            <input type="text" name="task" id="" placeholder="Enter your task.. " class="w-[22rem] text-center p-2 text-black font-bold rounded-xl">
            <button type="submit" class="ml-2 w-20 bg-red-300 rounded-xl shadow">ADD</button>
        </form>
        <div class="">
            <ul>
                @foreach($tasks as $task)
                <div class="flex my-2 justify-center items-center bg-red-600 text-white h-10 w-full px-4">
                    <h4 class="{{ $task->completed ? 'strikethrough' : '' }}">{{$task->task}}</h4> 
                    <form action="{{ route('todos.destroy', $task->id) }}" method="post" class="flex justify-center align-center ">
                       
                        <a class="" href="{{ route('todos.edit',$task->id) }}"><i class="fa-solid fa-pen-to-square cursor-pointer mx-2"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa-solid fa-trash  cursor-pointer mr-2"></i></button>

                    </form>   
                </div>
                @endforeach
            </ul>
        </div>
@endsection
<ul>
    @foreach($tasks as $task)
    <li>{{$task->task}}</li>
    @endforeach
</ul>
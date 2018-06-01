@extends('layouts.app')


@section('content')

    <h1>kadai-tasklist</h1>

    @if (count($messages) > 0)
        <ul>
            @foreach ($tasks as $task)
            
            
            @endforeach
        </ul>
    @endif
            @foreach ($tasks as $task) 


            <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>

            @endforeach
             {!! link_to_route('tasks.create', '新規課題の投稿') !!}
@endsection
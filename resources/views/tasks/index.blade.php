@extends('layouts.app')


@section('content')

    <h1>kadai-tasklist</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
            <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
              {!! link_to_route('tasks.create', '新規課題の投稿') !!}
            @endforeach
        </ul>
    @endif

           
@endsection
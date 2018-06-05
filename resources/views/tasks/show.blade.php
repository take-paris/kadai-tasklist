@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} 's KADAI</h1>

    <p>STATUS: {{ $task->status }}</p>
    <p>TASK: {{ $task->content }}</p>

    <table class="table table-bordered">
        <tr>
            <th>ORDER</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>STATUS</th>
            <td>{{ $task->title }}</td>
        </tr>
        <tr>
            <th>KADAI</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'EDIT THIS KADAI', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
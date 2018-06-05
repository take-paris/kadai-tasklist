@extends('layouts.app')

@section('content')

    <h1>KADAI-TASKLIST</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ORDER</th>
                    <th>STATUS</th>
                    <th>KADAI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->order }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

      {!! link_to_route('tasks.create', 'SUBMIT NEW KADAI', null, ['class' => 'btn btn-primary']) !!}

@endsection
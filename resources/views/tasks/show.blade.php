@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の課題詳細ページ</h1>

    <p>ステータス: {{ $task->status }}</p>
    <p>メッセージ: {{ $task->content }}</p>
        <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->title }}</td>
        </tr>
        <tr>
            <th>課題</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
     {!! link_to_route('tasks.edit', 'この課題を編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
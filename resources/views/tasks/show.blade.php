@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の課題詳細ページ</h1>

    <p>ステータス: {{ $task->status }}</p>
    <p>メッセージ: {{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'この課題編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
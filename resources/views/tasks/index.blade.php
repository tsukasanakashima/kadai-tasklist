@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->

<h1>メッセージ一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->content }}</li>
                <li>{!! link_to_route('task.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
                
            
            @endforeach
        </ul>
    @endif
    
{!! link_to_route('tasks.create', '新規メッセージの投稿') !!}
@endsection


@endsection

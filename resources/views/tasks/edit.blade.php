@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>id: {{ $task->id }} のメッセージ編集ページ</h1>

  <div class="row col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
        
    </div>

@endsection

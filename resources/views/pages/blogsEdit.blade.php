@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="card">
        <h1 class="card-header text-center">Edit Post</h1>
        <div class="card-body">
        {!! Form::open(['action' => ['blogController@update', $blog->id], 'method' => 'POST']) !!}
            <div class="form-group">
                <b>{{Form::label('title','Title')}}</b>
                {{Form::text('title', $blog->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                <b>{{Form::label('body','Body')}}</b>
                {{Form::textarea('body', $blog->body, ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

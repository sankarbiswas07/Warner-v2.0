@extends('layouts.default')
@section('content')
<div class="container">
    <div class="card">
            <strong><h4 class="card-header text-right text-info">Create Post</h4></strong>
            <div class="card-body">
            <h4 class="card-title">
                    {!! Form::open(['action' => 'blogController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                       <b> {{Form::label('title','Title')}}</b>
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
            </h4>
            <p class="card-text">
                    <div class="form-group">
                       <b>{{Form::label('body','Body')}}</b> 
                        {{Form::textarea('body', '', ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>
            </p>

            {{Form::submit('Submit',['class'=>'btn btn-sm btn-primary'])}}
            {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
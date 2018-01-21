@extends('layouts.default')

@section('content')

<div class="container-fluid">             
            <div class="card">
            <h4 class="card-header text-center">{{$blog->title}}
            <footer class ="blockquote-footer">
                  <small>Written on {{$blog->created_at}} by: <b>{{$blog->user->name}}</b></small>
                  <div>
                        <a href="/blogs" class="btn btn-info btn-sm float-left">Go Back</a>
                        @if(!Auth::guest())
                            @if(Auth::user()->id == $blog->student_id)
                                {!!Form::Open(['action'=>['blogController@destroy',$blog->id],'method'=>'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger btn-sm float-right'])}}  
                                    <a href="/blogs/{{$blog->id}}/edit" class="btn btn-sm btn-info float-right">Edit</a>
                                {!!Form::close()!!}
                            @endif
                        @endif
                </div>
            </footer>  </h4>
            <div class="col-md-8 col-sm-8">
                <div class="container">{!!$blog->body!!}</div>
                 
            </div>
    </div>
</div>


    
@endsection
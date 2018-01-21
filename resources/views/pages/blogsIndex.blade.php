@extends('layouts.default')

@section('details')
    <div class="container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                Hello <strong> {{auth()->user()->name}}</strong> !!!  You can not find blogs from another Departments.
            </div>

            <div class="alert alert-primary" role="alert">
                     <a href="/blogs/create" class="alert-link text-right"><h5>Make Post</h5></a>
            </div>
    </div>

    {{--  Script for auto-close "alert-warning" after 3 sec.  --}}
        <script> 
                window.setTimeout(function () {
                    $(".alert-warning").fadeTo(500, 0).slideUp(500, function () {
                        $(this).remove();
                    });
                }, 3000);
        </script>
        <script> 
            window.setTimeout(function () {
                $(".alert-danger").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 2500);
    </script>
@endsection



@section('gotoLogins')

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        {{--  Script for auto-close "alert-success" after 2 sec.  --}}
        <script> 
                window.setTimeout(function () {
                    $(".alert-success").fadeTo(500, 0).slideUp(500, function () {
                        $(this).remove();
                    });
                }, 2000);
        </script>

    

    @if(count($blogs) > 0)
    @foreach($blogs as $blog)
    <div class="container">
        <div class="card">
            <div class="card-body ">
                <div class="col-md-8 col-sm-8">
                    <h3><a style="color:#3e3d8c;" href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h3>
                 <footer class ="blockquote-footer">
                    Written on {{$blog->created_at}} by: <b>{{$blog->user->name}}</b>
                </footer>   
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <p>No blogs found</p>
    @endif
@endsection

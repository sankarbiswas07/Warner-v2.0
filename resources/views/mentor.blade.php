@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading text-right">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
            Mentor's Dashboard 
            
        </h4>
    </div>
        @include('inc.FeedShow')
</div>
@endsection

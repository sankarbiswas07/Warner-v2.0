@extends('layouts.default')

@section('details')

 
        <div class="card text-center bg-secondary">

                <div class="card-header">
                    <h5>Hello, <strong class="text-success">{{auth()->user()->name}}</strong></h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h4 class="card-title">Non-academic FeedBack form</h4>
                        <p class="card-text">( Fillup the form carefully. Entry can not be changed. )</p>
                        
                        <hr style="height:1px;border:none;color:#333;background-color:#1680ab;" />
            
                        @include('inc.StudentFeedForm')
            
                        <hr style="height:1px;border:none;color:#333;background-color:#1680ab;" />
            
                    </div>
                </div>

        </div>
   

@endsection

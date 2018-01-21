@extends('layouts.default')

@section('details')
    <div class="container">
            <div class="jumbotron bg-success jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Hello !!!</h1>
                    <p class="lead">I am WARNER, online secure Brainware Students' Mentoring System. Are you Student or Faculty ?</p>
                </div>
            </div>
    </div>
@endsection

@section('gotoLogins')
    <div class="container">
        <div class="row">
                <div class="col-sm-6">
                <div class="card ">
                    <h4> <div class="card-header text-center">Student</div></h4>
                    <div class="card-body">
                        <p class="card-text">Student, are you registered already? go down and SignUp first.<br/> your feedback is important to us. </p>
                        <div class="text-center">
                            <a href="{{ route('register') }}" class="btn btn-primary btn-raised">SignUp</a>
                            <a href="{{ route('login') }}" class="btn btn-primary btn-raised">SignIn</a>
                        </div>
                    </div>
                </div>
                </div>
                
                <div class="col-sm-6">
                <div class="card ">
                    <h4> <div class="card-header text-center">Faculty</div></h4>
                    <div class="card-body">
                        <p class="card-text">you have students under your monitoring. <br />Signup first for their better feedback.</p>
                        <div class="text-center">
                            <a href="{{route('mentor.signup')}}" class="btn btn-primary btn-raised">SignUp</a>
                            <a href="{{route('mentor.login')}}" class="btn btn-primary btn-raised">SignIn</a>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
@endsection

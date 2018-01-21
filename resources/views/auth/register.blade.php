@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
                <div class="card text-gray-dark bg-light mb-3">
                        <div class="card-header bg-light text-primary text-center "><h4>Student's form for registration</h4></div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-check{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-check{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="roll" class="col-md-4 control-label">Roll-No.</label>
    
                                    <input id="roll" type="text" class="form-control" name="roll" value="{{ old('roll') }}" required autofocus>
    
                                    @if ($errors->has('roll'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('roll') }}</strong>
                                        </span>
                                    @endif
                        </div>

                        <div class="form-check{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-check{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>


                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-check">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        
                        <div class="form-group">
                                <div class="text-center">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

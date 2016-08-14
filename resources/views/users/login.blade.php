@extends('layouts.master')

@section('title', 'Login')

@section('body')

<div id="fh5co-main">

    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fh5co-page-heading-lead">
                        Login to sign-in
                    </h1>

                </div>
            </div>
        </div>
    </aside>
    <div class="container">
        <div class="row">
             @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome Back!</h3>
            </div>
            <div class="col-sm-2"></div>
            {!! Form::open(['url' => 'auth/login']) !!}
            <div class="col-sm-3">
            <div class="form-group">
                
                    {!! Form::label('Title') !!}
                    {!! Form::select('title', ['permanent_staff' => 'Permanent Staff', 'nysc' => 'NYSC', 'student_teacher' => 'Student Teacher', 'volunteers' => 'Volunteers', 'security_personnel' => 'Security Personnel'], null, ['placeholder' => 'Select Your Title...'])!!}
                </div>
            </div>
            
            
            <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('Password')!!}
                {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Enter your password'])!!}
                </div>
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-7">
            
                {!! Form::submit('Login', ['class' => 'btn btn-success'])!!}
                {!! Form::reset('Reset', ['class'=> 'btn btn-warning'])!!}
                
            </div>
            
            {!! Form::close() !!}
        </div>
        
        {!! Form::open(['url' => 'register', 'method' => 'get']) !!}
        <div class="row-sm-12">
        {!! Form::submit('New Staff? Please Click Here to Register', ['class' => 'btn btn-info'])!!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
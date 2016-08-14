@extends('layouts.master')

@section('title', 'Register')

@section('body')

<div id="fh5co-main">
    <aside class="fh5co-page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="fh5co-page-heading-lead">
                            Register Here
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
            @endif
            @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
            @endif
            <div class="col-md-12">
                <h3>Please fill the fields below!</h3>
            </div>
            {!! Form::open(['url'=>'register', 'files' => true]) !!}
            
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('Title') !!}
                     {!! Form::select('title', ['permanent_staff' => 'Permanent Staff', 'nysc' => 'NYSC', 'student_teacher' => 'Student Teacher', 'volunteers' => 'Volunteers', 'security_personnel' => 'Security Personnel'], null, ['placeholder' => 'Select Your Title...'])!!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('FirstName')!!}
                    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your First Name']) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('Last Name') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your Last Name']) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('Subjects') !!}
                    {!! Form::textarea('subject', null, ['class' => 'form-control', 'placeholder' => 'Please Enter your Subject, separated by a comma(,). If any', 'rows' => 2]) !!}
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    {!! Form::label('Password') !!}
                    {!! Form::text('password', null,['class' => 'form-control', 'placeholder' => 'Enter your Password']) !!}
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Passport') !!}
                    {!! Form::file('picture_url', null) !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::submit('Register', ['class' => 'btn btn-info']) !!}
                    {!! Form::reset('Reset', ['class'=> 'btn btn-warning'])!!}
                </div>
            </div>


            {!! Form::close() !!}

        </div>
    </div>
</div>


@endsection
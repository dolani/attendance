@extends('layouts.master')

@section('title', 'Attendance Register')

@section('body')

<div id="fh5co-main">

    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fh5co-page-heading-lead">
                        Attendance Register
                    
                    </h1>

                </div>
            </div>
        </div>
    </aside>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Set the fill the fields below to update</h3>
            </div>
            <form action="{{ url('update') }}" method="post" enctype="multipart/form-data">
                @foreach($errors as $error)
                <div class="alert alert-dismissible alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span><span class="sr-only">Close</span></button>
                    {{$error}}
                </div>
                @endforeach

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">First Name</label>
                        <input placeholder="Please enter your first name" name="first_name" value="{{ $user->first_name }}" type="text" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Last Name</label>
                        <input placeholder="Please enter your last name" name="last_name" value="{{ $user->last_name }}" type="text" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Email</label>
                        <input placeholder="Please enter your email" name="email" value="{{ $user->email }}" type="email" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="">Current Picture</label>
                        <img src="{{ $user->picture }}">
                        <input name="picture" type="file">
                    </div>
                    <span>Choose a file to replace</span>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message" class="sr-only">Short bio</label>
                        <textarea placeholder="Say something about yourself" name="bio" class="form-control input-lg" rows="3">{{ $user->bio }}</textarea>
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="sr-only">Password</label>
                        <input placeholder="Password" name="password" type="password" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="sr-only">Confirm Password</label>
                        <input placeholder="Confirm Password" name="password_confirmation" type="password" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary " value="Update">
                        <input type="reset" class="btn btn-outline  " value="Reset">
                    </div>	
                </div>
            </form>	
        </div>
    </div>
</div>

@stop
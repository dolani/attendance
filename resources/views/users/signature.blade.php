@extends('layouts.master')

@section('title', 'Attendance Register')

@section('body')

<div id="fh5co-main">
    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fh5co-section-lead">Attendance Register</h2>

                </div>
            </div>
        </div>
    </aside>

    <div class="container" id="fh5co-features">
        <div class="row">
            
            <div class="col-md-3">
                <ul>
                    <li> {{Auth::user()->last_name .' '. Auth::user()->first_name}}</li>
                    <li>{{Auth::user()->subject}}</li>
                    
                    <li><a href="{{url('#') }}"><img src="{{Auth::user()->picture_url}}" width="300" height="300" class="img-responsive img-rounded"/></a></li>
                </ul>
                
                {!! Form::open(['url'=>'auth/logout', 'method' => 'get'])!!}
                    
                    
                    {!!Form::submit('Logout here', ['class' => 'btn btn-info']) !!}
                    
                    {!!Form::close()!!}
            
            </div>

            <div class="col-md-9">
                <div class="jumbotron">
                    <div class="container">
                <div class="row">
                    
                    <div class="col-md-7">
                
                    {!! Form::open(['url'=>'signed'])!!}
                    
                    {!! Form::hidden('title', Auth::user()->title) !!}
                    
                    {!! Form::hidden('first_name', Auth::user()->first_name) !!}
                    
                     {!! Form::hidden('last_name', Auth::user()->last_name) !!}
                    
                    {!! Form::hidden('subject', Auth::user()->subject) !!}
      
                    
                    {!!Form::submit('Click Here To Append Your Signature', ['class' => 'btn btn-success', 'name' => 'submitBtn', 'onClick' =>'this.form.submit();this.disabled=true;' ]) !!}
                    
                        
                    {!!Form::close()!!}
                    </div>
                        <div class="col-md-5">
                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                {{ Session::get('flash_message') }}
                </div>
                @endif
                </div>
                    </div>
            </div>
        </div>
            </div>
    </div>

</div>

@endsection
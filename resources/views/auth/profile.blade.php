@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                <strong>
                    Profile - 
                    @if (Session::has('UserName'))
                        {{Session::get('UserName') }}
                    @else
                        {{ Auth::user()->name }}
                    @endif
                </strong>
                <a href="{{ url('/edit-profile') }}" class="pull-right">Edit</a> 
                </div>

                <div class="panel-body profile-container">
                    <div class="col-md-3 col-md-offset-1 img">
                      <img src="{{$user['photo']}}"  alt="" class="img-rounded">
                    </div>
                    <div class="col-md-6 details">
                      <blockquote>
                        <h3><strong>Name : </strong>{{$user['name']}}</h3>
                        <h4><strong>FullName : </strong>{{$user['fullname']}}</h4>
                        <h5><strong>Email : </strong>{{$user['email']}}</h5>
                      </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Your info</div>
                    <div class="panel-body">
                    <h2>{{$user->name}}</h2>
                    <p>Email: {{$user->email}}</p>
                    <p>Added on Chore Manager on: {{$user->created_at}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
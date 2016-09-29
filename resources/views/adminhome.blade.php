@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    {{$user->role}}
                    <div class="panel-body">
                        You are logged in!
                        Hier komt een admin panel voor deze admin user
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

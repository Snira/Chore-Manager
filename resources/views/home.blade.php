@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('choremanager.home.title') }}</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="choretable">
                                <thead>
                                <tr>
                                    <th> -</th>
                                    @foreach($chores as $chore)
                                        <th>{{$chore->name}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>{{ trans('choremanager.home.days.monday') }}</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>{{ trans('choremanager.home.days.tuesday') }}</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>{{ trans('choremanager.home.days.wednesday') }}</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>{{ trans('choremanager.home.days.thursday') }}</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th>{{ trans('choremanager.home.days.friday') }}</th>
                                    @foreach($users as $user)
                                        <td>{{$user->name}}</td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


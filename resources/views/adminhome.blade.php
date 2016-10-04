@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form action="">
                            <table class="table">
                                <tr>
                                    <th> {{ trans('choremanager.users') }}</th>
                                    <th>{{ trans('choremanager.options') }}</th>
                                </tr>
                                @foreach($allusers as $users)
                                    <tr>
                                        <td>{{$users->name}}</td>
                                        <td>
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Active"
                                                   data-off="Non-Active">
                                            <button class="btn btn-danger">{{ trans('choremanager.delete') }}</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

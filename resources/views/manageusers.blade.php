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
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            <a href="{{ route('users.activity', compact('user')) }}"
                                               class="action btn {{ $user->deleted_at ? 'btn-warning' : 'btn-success' }}">
                                                @if(!$user->deleted_at) {{'Active'}}@else {{'Inactive'}} @endif
                                            </a>

                                            <a href="{{ route('users.destroy', compact('user')) }}"
                                               class="action btn btn-danger" id="delete">
                                                {{ trans('choremanager.delete') }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                        <a href="{{route('users.create')}}">Create User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

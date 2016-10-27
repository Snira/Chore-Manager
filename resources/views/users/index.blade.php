@extends('layouts.app')
@extends('layouts.usermodal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('choremanager.user.title') }}

                    </div>
                    <div class="panel-body">

                        <form method="post" enctype="multipart/form-data" action="{{ route('user.filtered') }}">
                            <div class="form-group">
                                <label for="filter"></label>
                                <select class="form-control" name="filter" id="filter">
                                    <option hidden disabled selected value="">Filter on user type</option>
                                    <option value="1">All</option>
                                    <option value="2">Admins</option>
                                    <option value="3">Users</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Add</button>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </form>


                        <table class="table">
                            <tr>
                                <th> {{ trans('choremanager.user.users') }}</th>
                                <th>{{ trans('choremanager.user.options') }}</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <a href="{{ route('user.activity', compact('user')) }}"
                                           id="active-switch"
                                           class="action btn {{ $user->deleted_at ? 'btn-warning' : 'btn-success' }}">
                                            @if(!$user->deleted_at) {{trans('choremanager.user.active')}}
                                            @else {{trans('choremanager.user.inactive')}}
                                            @endif
                                        </a>
                                        <button class="btn btn-danger" id="delete" data-toggle="modal"
                                                data-target="#myModal">
                                            {{ trans('choremanager.user.delete') }}
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{route('user.create')}}">{{ trans('choremanager.user.create') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

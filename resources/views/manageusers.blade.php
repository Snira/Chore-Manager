@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('choremanager.user.title') }}</div>
                    <div class="panel-body">
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

                                        <a href="{{ route('user.destroy', compact('user')) }}"
                                           class="action btn btn-danger" id="delete">
                                            {{ trans('choremanager.user.delete') }}
                                        </a>
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

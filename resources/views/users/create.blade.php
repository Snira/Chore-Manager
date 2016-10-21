@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('choremanager.user.create') }}</div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('user.create') }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">{{ trans('choremanager.user.email') }}</label>
                                <input required class="form-control" id="username" type="email" name="users[email]">
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">{{ trans('choremanager.user.name') }}</label>
                                <input required class="form-control" id="username" type="text" name="users[name]">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ trans('choremanager.app.submit') }}</button>
                                <a href="{{route('user')}}" class="btn btn-default">{{ trans('choremanager.app.cancel') }}</a>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('choremanager.chore.create') }}</div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('chore.create') }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="chorename">{{ trans('choremanager.chore.name') }}</label>
                                <input required class="form-control" id="chorename" type="text" name="chores[name]">
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="choredescription">
                                    {{ trans('choremanager.chore.descriptionlabel') }}
                                </label>
                                <input required type="text" class="form-control" id="choredescription" name="chores[description]">

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ trans('choremanager.app.submit') }}</button>
                                <a href="{{route('chore')}}" class="btn btn-default">{{ trans('choremanager.app.cancel') }}</a>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
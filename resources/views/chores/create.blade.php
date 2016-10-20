@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add chore</div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('user.create') }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">Naam</label>
                                <input class="form-control" id="username" type="text" name="chores[name]">
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">Description</label>
                                <input class="form-control" id="username" type="text" name="chores[description]">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
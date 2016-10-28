@extends('layouts.app')

@extends('layouts.choremodal')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">  {{ trans('choremanager.chore.title') }}</div>

                    <div class="panel-body">

                        <form method="post" enctype="multipart/form-data" action="{{ route('chore.searched') }}">
                            <div class="form-group">
                                <label for="search"></label>
                                <input class="form-control" id="search" type="text" name="search"
                                       placeholder="Search on keyword ">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                            @if ( session()->has('message') )
                                <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                            @endif
                        </form>
                        <table class="table">
                            <tr>
                                <th>{{ trans('choremanager.chore.chore') }}</th>
                                <th>{{ trans('choremanager.chore.description') }}</th>
                            </tr>
                            @foreach($chores as $chore)
                                <tr>
                                    <td>{{$chore->name}}</td>
                                    <td>
                                        {{$chore->description}}
                                    </td>
                                    <td>
                                        <a href="#">
                                                <span data-toggle="modal" data-target="#myModal"
                                                      class="glyphicon glyphicon-trash">
                                                </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        <a href="{{route('chore.create')}}">{{ trans('choremanager.chore.create') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
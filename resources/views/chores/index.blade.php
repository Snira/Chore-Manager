@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">  {{ trans('choremanager.chore.title') }}</div>

                    <div class="panel-body">
                        <form action="">
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
                                            <a href="{{ route('chore.destroy', compact('chore')) }}">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </form>
                        <a href="{{route('chore.create')}}">{{ trans('choremanager.chore.create') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
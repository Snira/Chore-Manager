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
                                        <th>{{ $chore->name }}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag'] as $index => $day)
                                <tr>
                                    <th>{{ $day }}</th>
                                    @foreach($chores as $chore)
                                    <td>{{ $data[$index][$chore->name] }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


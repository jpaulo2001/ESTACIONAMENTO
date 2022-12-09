@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-hover table-stripped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cliente</th>
                        <th>Deadline</th>
                        <th>Estimativs</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->customer->name }}</td>
                            <td>{{ $project->deadline }}</td>
                            <td>{{ $project->estimate }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </div>

@endsection

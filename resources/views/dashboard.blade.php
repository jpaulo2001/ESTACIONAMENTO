@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 ">
                <h3>Projectos com Mais Horas</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Projecto</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Horas</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($top_projects as $pos => $project)
                                <tr>
                                    <td>{{ $pos + 1 }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->customer->name }}</td>
                                    <td>{{ round($project->events_sum_duration/3600, 1) }} h</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 ">
                <h3>Projectos com Menos Horas</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Projecto</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Horas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bottom_projects as $pos => $project)
                            <tr>
                                <td>{{ $pos + 1 }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->customer->name }}</td>
                                <td>{{ round($project->events_sum_duration/3600, 1) }} h</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 ">
                <h3>Clientes com Mais Projectos</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Horas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($top_customers as $pos => $customer)
                            <tr>
                                <td>{{ $pos + 1 }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->projects_count }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 ">
                <h3>Clientes com Menos Projectos</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Horas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bottom_customers as $pos => $customer)
                            <tr>
                                <td>{{ $pos + 1 }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->projects_count }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 ">
                <h3>Clientes com Mais Horas</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Horas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($top_customer_hours as $pos => $customer)
                            <tr>
                                <td>{{ $pos + 1 }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->events_sum_duration }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 ">
                <h3>Clientes com Menos Horas</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Horas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bottom_customer_hours as $pos => $customer)
                            <tr>
                                <td>{{ $pos + 1 }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->events_sum_duration ?? 0}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

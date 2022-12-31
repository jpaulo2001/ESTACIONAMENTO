@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-large"> Adicionar Carro</a>
                <table class="table table-hover table-stripped">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-large">Remover Carro</a>
                    <table class="table table-hover table-stripped">
                    <!--
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Qtd Projectos</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->projects->count() }}</td>
                            <td>
                                <a href="{{ route('clientes.edit', ['cliente' => $customer->id]) }}" class="btn btn-primary">Modificar</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </div>
-->

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('tarifario.update', ['cliente' => $customer]) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="name" class="col-form-label">Nome</label>
                        </div>
                        <div class="col-auto">
                            <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    value="{{ old('name', $customer->name) }}"
                            >
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-auto">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="email" value="{{ old('email', $customer->email) }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-1">
                        <div class="col-auto">
                            <label for="vat" class="col-form-label">Contribuinte</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="vat" value="{{ old('vat', $customer->vat) }}">
                            @error('vat')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-1">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success btn-lg">
                                Registar Cliente
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 ">
                <h3>Frota de carros</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Plate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            {{ $post->plate }}
                        @endforeach
                        <!--
                        /*
                                <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                </tr>
                    */
                        -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

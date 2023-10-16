@extends('imc.index')

@section('content')
    <div class="container mt-2">

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p>
                <h2>Tu IMC es:</h2> {{ $imc }} </p>
                <a class="btn btn-warning btn-sm mb-2" href="/imc">Regresar</a>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection

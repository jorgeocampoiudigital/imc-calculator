@extends('imc.index')

@section('content')
    <div class="container mt-2">
        <form action="{{route('calculate.imc')}}" method="post">
            @csrf
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="form-floating mb-2">
                        <input type="number" class="form-control" name="altura">
                        <label for="altura" class="form-label">Altura en cm</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="number" class="form-control" name="peso">
                        <label for="peso" class="form-label">Peso en kg</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="number" class="form-control" name="edad">
                        <label for="edad" class="form-label">Edad</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="sexo">
                        <label for="sexo" class="form-label">Sexo (H/M/O)</label>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-success btn-sm">Calcular IMC</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </form>
    </div>
@endsection

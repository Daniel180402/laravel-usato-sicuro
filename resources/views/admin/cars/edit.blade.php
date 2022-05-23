@extends('layouts.app')

@section('content')
    <h1>Modifica auto</h1>
    <form action="{{route('admin.cars.update', compact('car'))}}" method="POST" class="d-flex flex-column g-2">
        @csrf
        @method('PUT')

        @error('numero_telaio')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror

        @error('model')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror

        @error('porte')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror

        @error('marca')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror

        @error('data_immatricolazione')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror


        @error('is_new')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror

        @error('alimentazione')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror

        @error('prezzo')
        <span class="alert alert-danger">
            {{ $message }}
        </span>
        @enderror

        <label for="numero_telaio">Numero di telaio</label>
        <input type="text" name="numero_telaio" id="numero_telaio" class=" form-control"
            value="{{ $car->numero_telaio }}">

        <label for="model">Modello</label>
        <input type="text" name="model" id="model" class=" form-control" value="{{ $car->model}}">

        <label for="porte">Porte</label>
        <input type="text" name="porte" id="porte" class=" form-control" value="{{ $car->porte}}">

        <label for="data_immatricolazione">Immatricolazione</label>
        <input type="text" name="data_immatricolazione" id="data_immatricolazione" class=" form-control"
            value="{{ $car->data_immatricolazione}}">

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" class=" form-control" value="{{ $car->marca}}">

        <label for="alimentazione">Alimentazione</label>
        <input type="text" name="alimentazione" id="alimentazione" class=" form-control"
            value="{{ $car->alimentazione}}">

        <label for="prezzo">Prezzo</label>
        <input type="text" name="prezzo" id="prezzo" class=" form-control" value="{{ $car->prezzo}}">

        <label for="is_new"> Nuova</label></label>
        <input type="checkbox" name="is_new" id="is_new" class="form-check" checked="{{ $car->is_new}}">

        <button type="submit" class=" align-self-start btn btn-primary mt-2">Modifica</button>
        <a class="align-self-start btn btn-dark mt-2" href="{{ route('admin.cars.index') }}">Torna indietro</a>
    </form>
@endsection

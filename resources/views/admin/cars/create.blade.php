@extends('layouts.app')

@section('content')
    <h1>Creazione nuova auto</h1>
    <form action="{{route('admin.cars.store')}}" method="POST" class="d-flex flex-column g-2">
        @csrf
        <label for="numero_telaio">Numero di telaio</label>
        <input type="text" name="numero_telaio" id="numero_telaio" class=" form-control">

        <label for="model">Modello</label>
        <input type="text" name="model" id="model" class=" form-control">

        <label for="porte">Porte</label>
        <input type="text" name="porte" id="porte" class=" form-control">

        <label for="data_immatricolazione">Immatricolazione</label>
        <input type="text" name="data_immatricolazione" id="data_immatricolazione" class=" form-control">

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" class=" form-control">

        <label for="alimentazione">Alimentazione</label>
        <input type="text" name="alimentazione" id="alimentazione" class=" form-control">

        <label for="prezzo">Prezzo</label>
        <input type="text" name="prezzo" id="prezzo" class=" form-control">

        <button type="submit" class=" align-self-start btn btn-primary mt-2">Aggiungi</button>
        <a class="align-self-start btn btn-dark mt-2" href="{{ route('admin.cars.index') }}">Torna indietro</a>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Lista auto</h1>
    <nav class="my-3 px-3">
        <a href="{{route('admin.home')}}" class="btn btn-dark">Torna alla Home</a>
        <a href="{{route('admin.cars.create')}}" class="btn btn-primary">Aggiungi Auto</a>
    </nav>

    <div class="row row-cols-4 g-3">
        @foreach ($cars as $car)
        <div class="col">
            <div class="card">
                <h3 class=" card-header">
                    {{ucfirst($car->marca)}}
                </h3>
                <div class=" card-body">
                    <h4>
                        {{$car->numero_telaio}}
                    </h4>

                </div>
                <div class=" card-footer">
                    <a href="{{route('admin.cars.show', $car->id)}}" class=" btn">Dettagli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@extends('layouts.default')

@section('main')
<main class="container my-5">
    <div>
        <h1>{{ ucfirst($car->model)}} - {{ ucfirst($car->marca)}}</h1>

        <nav class="my-3 px-3">
            <a href="{{route('home')}}" class="btn btn-dark">Torna alla Home</a>
            <a href="{{route('cars.index')}}" class="btn btn-primary">Lista completa</a>
        </nav>

        <div class="border border-3 rounded-2 p-3">
            <h4>Immatricolata nel {{ DateTime::CreateFromFormat('Y-m-d', $car->data_immatricolazione)
                ->format('d/m/Y')}}
            </h4>
            @if ($car->is_new)
            <span class=" badge bg-info">Nuova</span>
            @endif

            <br>
            <a href="{{ route('cars.edit', compact('car'))}}" class="btn btn-warning">Modifica</a>
            <form action="{{ route('cars.destroy', compact('car'))}}" method="POST" car-numero-telaio="{{ucwords($car->numero_telaio)}}" class="d-inline blackhole">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </div>
    </div>
</main>
@endsection

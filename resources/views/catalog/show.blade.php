@extends ('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$pelicula->poster}}">
        </div>
        <div class="col-sm-8">
            <h2>{{$pelicula->title}}</h2>
            <h4>Año: {{$pelicula->year}}</h4>
            <h4>Director: {{$pelicula->director}}</h4>
            <p><span class="font-weight-bold">Resumen: </span>{{$pelicula->synopsis}}</p>
            <p><span class="font-weight-bold">Estado: </span>
            @if($pelicula->rented)
                Alquilada
            @else
                Disponible
            @endif
            </p>
            <button type="submit" name="devolver" class="btn btn-danger">Devolver película</button>
            <a name="editar" class="btn btn-warning" href="{{url('catalog/edit').'/'.$pelicula->id}}"><i class="fas fa-spin fa-pencil-alt"></i> Editar película</a>
            <a name="atras" class="btn btn-light" href="{{url('catalog')}}"> <i class="far fa-arrow-alt-circle-left"></i> Volver al listado</a>

        </div>
    </div>
@endsection
<!DOCTYPE html>
<html lang="es">

<head>
    @include('usuarios/styles')
</head>

<body>
    <header>
        @include('usuarios/navbar')
        <link rel="stylesheet" href="{{asset('css/elements-int.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </header>
    <div id="container">
    @foreach($establecimientos  as $establecimiento)
        <div class="hotel-container">
            <div class="card-left">
                @foreach($establecimiento->imgEstablecimientos as $imagen)
                    <img src="{{ asset('img/' . $imagen->imagen) }}" alt="Imagen del establecimiento">
                @endforeach
            </div>
            <div class="card-right">
                <div class="card-header">
                    {{ $establecimiento->nombre }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $establecimiento->descripcion }}</p>
                    @php
                    $calificacionData = $establecimiento->calcularCalificacionPromedio();
                    $calificacion = $calificacionData['promedio'];
                    $totalCalificaciones = $calificacionData['total'];
                    $mejorComentario = $calificacionData['mejor_comentario'];
                    $mejorComentarioUsuario = $calificacionData['mejor_comentario_usuario'];
                    @endphp
                    <p class="card-text">{{ $mejorComentario }}</p>
                    <p class="card-text">Por: {{ $mejorComentarioUsuario }}</p>
                    @if($calificacion !== null)
                    <div class="rating">
                        @for($i = 1; $i <= 5; $i++)
                            @if($calificacion >= $i)
                                <i class="fas fa-star"></i>
                            @elseif($calificacion >= ($i - 0.5))
                                <i class="fas fa-star-half-alt"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                        <span>({{ $totalCalificaciones }} calificaciones)</span>
                    </div>
                    @else
                    <p>Sin calificación</p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
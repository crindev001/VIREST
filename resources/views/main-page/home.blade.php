<!DOCTYPE html>
<html lang="es">

<head>
    @include('usuarios/styles')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/elements.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header>
        @include('usuarios/navbar')
    </header>
    <div id="container">
        @foreach($tipoEstablecimientos as $tipo)
        <div class="tipo-container">
            @include('main-page/tipo-estab', ['tipo' => $tipo])
            <div class="estab-container" data-tipo-id="{{ $tipo->id }}">
                <div class="nav-buttons">
                    <button class="prev-button" disabled>Anterior</button>
                    <button class="next-button">Siguiente</button>
                </div>
                @foreach($tipo->establecimientos->chunk(4) as $establecimientosChunk)
                <div class="estab-group" style="display: none;">
                    @foreach($establecimientosChunk as $establecimiento)
                    <div class="establecimiento">
                        @if($establecimiento->imgEstablecimiento)
                        <img src="{{ asset('img/' . $establecimiento->imgEstablecimiento->imagen) }}" alt="Imagen del Establecimiento">
                        @else
                        <p>Aun no hay imagen disponible</p>
                        @endif
                        <h3>{{ $establecimiento->nombre }}</h3>
                        @php
                        $calificacionData = $establecimiento->calcularCalificacionPromedio();
                        $calificacion = $calificacionData['promedio'];
                        $totalCalificaciones = $calificacionData['total'];
                        @endphp
                        @if($calificacion !== null)
                        <div class="rating">
                            @for($i = 1; $i <= 5; $i++) @if($calificacion>= $i)
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
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <script src="{{asset('js/nav-element.js')}}"></script>
    <script src="{{asset('js/nav-bar.js')}}"></script>
</body>

</html>
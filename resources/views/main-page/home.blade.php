<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vi-Rest</title>
    <link rel="icon" href="{{asset('icons/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/elements.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- SEPARAR -->
    <header>
        <nav class="navbar fixed-top">
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="{{ asset('icons/logo.png') }}" alt="Logo"></a>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Hoteles</a></li>
                    <li><a href="#">Restaurantes</a></li>
                    <li><a href="#">Lugares Turísticos</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Sobre Nosotros</a></li>
                </ul>
                <div class="login">
                    <a href="#"><img src="{{ asset('icons/usuario.png') }}" alt="Usuario"></a>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN NAVEGADOR -->
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
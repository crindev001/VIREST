        @foreach($bares as $bar)
        <div class="hotel-container">
            <div class="card-left">
                @foreach($bar->imgEstablecimientos as $imagen)
                    <img src="{{ asset('img/' . $imagen->imagen) }}" alt="Imagen del establecimiento">
                @endforeach
            </div>
            <div class="card-right">
                <div class="card-header">
                    {{ $bar->nombre }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $bar->descripcion }}</p>
                    @php
                    $calificacionData = $bar->calcularCalificacionPromedio();
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
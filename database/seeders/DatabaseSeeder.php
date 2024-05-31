<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;
use App\Models\TipoUsuario;
use App\Models\TipoEstado;
use App\Models\TipoEstablecimiento;
use App\Models\TipoComida;
use App\Models\TipoCocina;
use App\Models\Evento;
use App\Models\Usuario;
use App\Models\Comentario;
use App\Models\Establecimiento;
use App\Models\ImgEstablecimiento;
use App\Models\ComentarioEstablecimiento;
use App\Models\Plato;
use App\Models\Carta;
use App\Models\ImgEvento;
use App\Models\ComentarioEvento;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $personas = [
            [
                'nombre' => 'Juan Pérez',
                'telefono' => '123456789',
                'correo' => 'juan.perez@example.com',
                'direccion' => 'Calle Falsa 123'
            ],
            [
                'nombre' => 'María Gómez',
                'telefono' => '987654321',
                'correo' => 'maria.gomez@example.com',
                'direccion' => 'Avenida Siempre Viva 456'
            ],
            [
                'nombre' => 'Carlos Ruiz',
                'telefono' => '555555555',
                'correo' => 'carlos.ruiz@example.com',
                'direccion' => 'Boulevard de los Sueños 789'
            ],
            [
                'nombre' => 'Ana Fernández',
                'telefono' => '444444444',
                'correo' => 'ana.fernandez@example.com',
                'direccion' => 'Calle Luna 101'
            ],
            [
                'nombre' => 'Pedro Martínez',
                'telefono' => '333333333',
                'correo' => 'pedro.martinez@example.com',
                'direccion' => 'Avenida Sol 202'
            ]
        ];
        foreach ($personas as $persona) {
            Persona::create($persona);
        }
        
        $tipoUsuarios = [
            ['descripcion' => 'administrador'],
            ['descripcion' => 'empresa'],
            ['descripcion' => 'comun']
        ];
        foreach ($tipoUsuarios as $tipoUsuario) {
            TipoUsuario::create($tipoUsuario);
        }
        
        $tipoEstados = [
            ['descripcion' => 'activo'],
            ['descripcion' => 'inactivo'],
            ['descripcion' => 'finalizado']
        ];
        foreach ($tipoEstados as $tipoEstado) {
            TipoEstado::create($tipoEstado);
        }
        
        $tipoEstablecimientos = [
            ['descripcion' => 'Restaurante'],
            ['descripcion' => 'Cafetería'],
            ['descripcion' => 'Bar'],
            ['descripcion' => 'Hotel'],
            ['descripcion' => 'Panadería']
        ];
        foreach ($tipoEstablecimientos as $tipoEstablecimiento) {
            TipoEstablecimiento::create($tipoEstablecimiento);
        }
        
        $tipoComidas = [
            ['descripcion' => 'Desayuno'],
            ['descripcion' => 'Almuerzo'],
            ['descripcion' => 'Cena'],
            ['descripcion' => 'Snack'],
            ['descripcion' => 'Postre']
        ];
        foreach ($tipoComidas as $tipoComida) {
            TipoComida::create($tipoComida);
        }

        $tipoCocinas = [
            ['descripcion' => 'Italiana'],
            ['descripcion' => 'Mexicana'],
            ['descripcion' => 'Japonesa'],
            ['descripcion' => 'China'],
            ['descripcion' => 'Francesa']
        ];
        foreach ($tipoCocinas as $tipoCocina) {
            TipoCocina::create($tipoCocina);
        }

        $eventos = [
            [
                'titulo' => 'Concierto de Rock',
                'descripcion' => 'Un increíble concierto de rock en vivo.',
                'direccion' => 'Plaza Mayor',
                'precio' => 50.00,
                'fecha' => '2024-06-01',
                'duracion' => '2 horas',
                'cupos' => 200
            ],
            [
                'titulo' => 'Feria de Comida',
                'descripcion' => 'Variedad de puestos de comida gourmet.',
                'direccion' => 'Parque Central',
                'precio' => 20.00,
                'fecha' => '2024-07-15',
                'duracion' => '5 horas',
                'cupos' => 500
            ],
            [
                'titulo' => 'Festival de Cine',
                'descripcion' => 'Proyección de películas independientes.',
                'direccion' => 'Centro Cultural',
                'precio' => 15.00,
                'fecha' => '2024-08-10',
                'duracion' => '3 días',
                'cupos' => 300
            ],
            [
                'titulo' => 'Conferencia de Tecnología',
                'descripcion' => 'Charlas sobre las últimas innovaciones tecnológicas.',
                'direccion' => 'Hotel Tech',
                'precio' => 100.00,
                'fecha' => '2024-09-20',
                'duracion' => '1 día',
                'cupos' => 150
            ],
            [
                'titulo' => 'Exposición de Arte',
                'descripcion' => 'Exposición de arte contemporáneo.',
                'direccion' => 'Museo de Arte',
                'precio' => 30.00,
                'fecha' => '2024-10-05',
                'duracion' => '1 semana',
                'cupos' => 1000
            ]
        ];
        foreach ($eventos as $evento) {
            Evento::create($evento);
        }

        $usuarios = [
            [
                'id_persona' => 1,
                'id_tipo_usuario' => 1,
                'id_estado' => 1,
                'user' => 'admin',
                'password' => '12345',
                'pwd_enc' => bcrypt('12345')
            ],
            [
                'id_persona' => 2,
                'id_tipo_usuario' => 2,
                'id_estado' => 1,
                'user' => 'empresa',
                'password' => '12345',
                'pwd_enc' => bcrypt('12345')
            ],
            [
                'id_persona' => 3,
                'id_tipo_usuario' => 3,
                'id_estado' => 1,
                'user' => 'comun',
                'password' => '12345',
                'pwd_enc' => bcrypt('12345')
            ]
        ];
        foreach ($usuarios as $usuario) {
            Usuario::create($usuario);
        }

        $comentarios = [
            // Comentarios para Restaurantes
            [
                'id_usuario' => 3,
                'titulo' => '¡Comida deliciosa!',
                'descripcion' => 'Me encantó la comida en El Buen Sabor. Ambiente acogedor y platos sabrosos.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Excelente servicio',
                'descripcion' => 'La Esquina siempre ofrece un servicio impecable. Recomiendo el plato del día.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Ambiente pintoresco',
                'descripcion' => 'El Bodegón tiene un ambiente rústico encantador. Ideal para una cena tranquila.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Vistas espectaculares',
                'descripcion' => 'Disfruté de una comida inolvidable en El Faro con vistas al mar. Altamente recomendado.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Gran experiencia',
                'descripcion' => 'La Terraza ofrece una experiencia gastronómica excepcional con una vista panorámica increíble.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
        
            // Comentarios para Cafeterías
            [
                'id_usuario' => 3,
                'titulo' => 'Café delicioso',
                'descripcion' => 'La Buena Taza sirve el mejor café de la ciudad. Los pasteles son también una delicia.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Encantador ambiente',
                'descripcion' => 'Dulce Café es mi lugar favorito para relajarme con una taza de café caliente y un buen libro.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Desayuno perfecto',
                'descripcion' => 'Mornings ofrece desayunos deliciosos. Recomiendo los huevos revueltos con aguacate.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Atmósfera acogedora',
                'descripcion' => 'El Rincón tiene una atmósfera acogedora y los mejores capuchinos de la ciudad.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Café con encanto',
                'descripcion' => 'Luna Llena tiene un ambiente único para disfrutar de un café por la noche.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
        
            // Comentarios para Bares
            [
                'id_usuario' => 3,
                'titulo' => 'Gran selección de tragos',
                'descripcion' => 'El Refugio tiene una gran selección de tragos y las tapas son deliciosas.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Ambiente relajado',
                'descripcion' => 'La Taberna ofrece un ambiente relajado para disfrutar de una noche con amigos.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Noches de jazz increíbles',
                'descripcion' => 'Noches de Jazz es mi lugar favorito para escuchar música en vivo y disfrutar de cócteles.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Cocktails deliciosos',
                'descripcion' => 'El Paraíso ofrece cocktails creativos y una vista impresionante al mar.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Ambiente íntimo',
                'descripcion' => 'La Cueva tiene un ambiente íntimo perfecto para una cita romántica.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
        
            // Comentarios para Hoteles
            [
                'id_usuario' => 3,
                'titulo' => 'Descanso garantizado',
                'descripcion' => 'Descanso ofrece habitaciones cómodas a precios asequibles. Perfecto para viajeros.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Experiencia de lujo',
                'descripcion' => 'Paradiso es sin duda el mejor hotel de la ciudad. Servicio impecable y habitaciones lujosas.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Tranquilidad total',
                'descripcion' => 'Serenidad vive realmente hasta su nombre. Un lugar tranquilo y relajante para desconectar.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Vistas impresionantes',
                'descripcion' => 'Vistas del Mar ofrece las vistas más impresionantes de la ciudad. Una experiencia única.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Ubicación conveniente',
                'descripcion' => 'Urbano está en el corazón de la ciudad, perfecto para viajeros de negocios. El servicio es excelente.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
        
            // Comentarios para Panaderías
            [
                'id_usuario' => 3,
                'titulo' => 'Pan fresco y delicioso',
                'descripcion' => 'La Delicia siempre tiene pan recién horneado. Recomiendo especialmente las baguettes.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Repostería fina',
                'descripcion' => 'El Horno ofrece una amplia selección de pasteles y tartas. Perfecto para satisfacer el antojo de dulces.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Variedad de productos',
                'descripcion' => 'Las Delicias tiene una variedad increíble de productos horneados. Siempre encuentro algo delicioso aquí.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Tradición en cada bocado',
                'descripcion' => 'La Trenza mantiene viva la tradición con sus deliciosos bollos y panes recién hechos.',
                'imagen' => NULL,
                'calificacion' => 4,
                'fecha' => '2024-05-31'
            ],
            [
                'id_usuario' => 3,
                'titulo' => 'Sabores auténticos',
                'descripcion' => 'Manjares ofrece sabores auténticos en cada bocado. Me encanta su pan de masa madre.',
                'imagen' => NULL,
                'calificacion' => 5,
                'fecha' => '2024-05-31'
            ]
        ];
        
        foreach ($comentarios as $comentario) {
            Comentario::create($comentario);
        }
        
        $establecimientos = [
            [
                'id_tipo_establecimiento' => 1,
                'id_estado' => 1,
                'nombre' => 'Restaurante El Buen Sabor',
                'descripcion' => 'Comida casera y tradicional.',
                'telefono' => '111111111',
                'direccion' => 'Calle del Sabor 123',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 1,
                'id_estado' => 1,
                'nombre' => 'Restaurante La Esquina',
                'descripcion' => 'Platos típicos con un toque moderno.',
                'telefono' => '666666666',
                'direccion' => 'Calle Principal 789',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 1,
                'id_estado' => 1,
                'nombre' => 'Restaurante El Bodegón',
                'descripcion' => 'Sabores tradicionales en un ambiente rústico.',
                'telefono' => '777777777',
                'direccion' => 'Avenida Bodega 456',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 1,
                'id_estado' => 1,
                'nombre' => 'Restaurante El Faro',
                'descripcion' => 'Mariscos y pescados frescos.',
                'telefono' => '888888888',
                'direccion' => 'Boulevard Marino 123',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 1,
                'id_estado' => 1,
                'nombre' => 'Restaurante La Terraza',
                'descripcion' => 'Vistas increíbles y comida deliciosa.',
                'telefono' => '999999999',
                'direccion' => 'Calle Vista 101',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 2,
                'id_estado' => 1,
                'nombre' => 'Cafetería La Buena Taza',
                'descripcion' => 'Café y pasteles artesanales.',
                'telefono' => '222222222',
                'direccion' => 'Avenida del Café 456',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 2,
                'id_estado' => 1,
                'nombre' => 'Cafetería Dulce Café',
                'descripcion' => 'Café y repostería para endulzar tu día.',
                'telefono' => '121212121',
                'direccion' => 'Calle Dulce 789',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 2,
                'id_estado' => 1,
                'nombre' => 'Cafetería Mornings',
                'descripcion' => 'Desayunos y brunch para comenzar el día.',
                'telefono' => '131313131',
                'direccion' => 'Avenida Amanecer 456',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 2,
                'id_estado' => 1,
                'nombre' => 'Cafetería El Rincón',
                'descripcion' => 'Un rincón acogedor con los mejores cafés.',
                'telefono' => '141414141',
                'direccion' => 'Boulevard Esquina 123',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 2,
                'id_estado' => 1,
                'nombre' => 'Cafetería Luna Llena',
                'descripcion' => 'Ambiente nocturno y café para todos.',
                'telefono' => '151515151',
                'direccion' => 'Calle Noche 101',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 3,
                'id_estado' => 1,
                'nombre' => 'Bar El Refugio',
                'descripcion' => 'Tragos y tapas en un ambiente relajado.',
                'telefono' => '333333333',
                'direccion' => 'Boulevard de los Amigos 789',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 3,
                'id_estado' => 1,
                'nombre' => 'Bar La Taberna',
                'descripcion' => 'Tragos clásicos y ambiente relajado.',
                'telefono' => '161616161',
                'direccion' => 'Calle Bar 789',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 3,
                'id_estado' => 1,
                'nombre' => 'Bar Noches de Jazz',
                'descripcion' => 'Música en vivo y bebidas especiales.',
                'telefono' => '171717171',
                'direccion' => 'Avenida Música 456',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 3,
                'id_estado' => 1,
                'nombre' => 'Bar El Paraíso',
                'descripcion' => 'Cocktails y vista al mar.',
                'telefono' => '181818181',
                'direccion' => 'Boulevard Playa 123',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 3,
                'id_estado' => 1,
                'nombre' => 'Bar La Cueva',
                'descripcion' => 'Ambiente íntimo y bebidas exclusivas.',
                'telefono' => '191919191',
                'direccion' => 'Calle Cueva 101',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 4,
                'id_estado' => 1,
                'nombre' => 'Hotel Descanso',
                'descripcion' => 'Alojamiento cómodo y económico.',
                'telefono' => '444444444',
                'direccion' => 'Calle de los Sueños 101',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 4,
                'id_estado' => 1,
                'nombre' => 'Hotel Paradiso',
                'descripcion' => 'Lujo y confort en cada estancia.',
                'telefono' => '202020202',
                'direccion' => 'Calle Paraíso 789',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 4,
                'id_estado' => 1,
                'nombre' => 'Hotel Serenidad',
                'descripcion' => 'Tranquilidad y relax garantizados.',
                'telefono' => '212121212',
                'direccion' => 'Avenida Paz 456',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 4,
                'id_estado' => 1,
                'nombre' => 'Hotel Vistas del Mar',
                'descripcion' => 'Las mejores vistas al océano.',
                'telefono' => '222222222',
                'direccion' => 'Boulevard Oceánico 123',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 4,
                'id_estado' => 1,
                'nombre' => 'Hotel Urbano',
                'descripcion' => 'Estilo moderno en el corazón de la ciudad.',
                'telefono' => '232323232',
                'direccion' => 'Calle Centro 101',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 5,
                'id_estado' => 1,
                'nombre' => 'Panadería La Delicia',
                'descripcion' => 'Pan y repostería recién hechos.',
                'telefono' => '555555555',
                'direccion' => 'Avenida de los Sabores 202',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 5,
                'id_estado' => 1,
                'nombre' => 'Panadería El Horno',
                'descripcion' => 'Pan fresco todos los días.',
                'telefono' => '242424242',
                'direccion' => 'Calle Panadería 789',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 5,
                'id_estado' => 1,
                'nombre' => 'Panadería Las Delicias',
                'descripcion' => 'Repostería fina y artesanal.',
                'telefono' => '252525252',
                'direccion' => 'Avenida Dulce 456',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 5,
                'id_estado' => 1,
                'nombre' => 'Panadería La Trenza',
                'descripcion' => 'Pan y bollería con tradición.',
                'telefono' => '262626262',
                'direccion' => 'Boulevard Tradición 123',
                'url' => '#'
            ],
            [
                'id_tipo_establecimiento' => 5,
                'id_estado' => 1,
                'nombre' => 'Panadería Manjares',
                'descripcion' => 'Sabores únicos y pan recién hecho.',
                'telefono' => '272727272',
                'direccion' => 'Calle Sabor 101',
                'url' => '#'
            ]
        ];
        foreach ($establecimientos as $establecimiento) {
            Establecimiento::create($establecimiento);
        }

        $imgEstablecimientos = [
            ['id_establecimiento' => 1, 'imagen' => 'default.png'],
            ['id_establecimiento' => 2, 'imagen' => 'default.png'],
            ['id_establecimiento' => 3, 'imagen' => 'default.png'],
            ['id_establecimiento' => 4, 'imagen' => 'default.png'],
            ['id_establecimiento' => 5, 'imagen' => 'default.png'],
            ['id_establecimiento' => 6, 'imagen' => 'default.png'],
            ['id_establecimiento' => 7, 'imagen' => 'default.png'],
            ['id_establecimiento' => 8, 'imagen' => 'default.png'],
            ['id_establecimiento' => 9, 'imagen' => 'default.png'],
            ['id_establecimiento' => 10, 'imagen' => 'default.png'],
            ['id_establecimiento' => 11, 'imagen' => 'default.png'],
            ['id_establecimiento' => 12, 'imagen' => 'default.png'],
            ['id_establecimiento' => 13, 'imagen' => 'default.png'],
            ['id_establecimiento' => 14, 'imagen' => 'default.png'],
            ['id_establecimiento' => 15, 'imagen' => 'default.png'],
            ['id_establecimiento' => 16, 'imagen' => 'default.png'],
            ['id_establecimiento' => 17, 'imagen' => 'default.png'],
            ['id_establecimiento' => 18, 'imagen' => 'default.png'],
            ['id_establecimiento' => 19, 'imagen' => 'default.png'],
            ['id_establecimiento' => 20, 'imagen' => 'default.png'],
            ['id_establecimiento' => 21, 'imagen' => 'default.png'],
            ['id_establecimiento' => 22, 'imagen' => 'default.png'],
            ['id_establecimiento' => 23, 'imagen' => 'default.png'],
            ['id_establecimiento' => 24, 'imagen' => 'default.png'],
            ['id_establecimiento' => 25, 'imagen' => 'default.png'],
        ];
        foreach ($imgEstablecimientos as $imgEstablecimiento) {
            ImgEstablecimiento::create($imgEstablecimiento);
        }

        $comentarioEstablecimientos = [
            ['id_comentario' => 1, 'id_establecimiento' => 1],
            ['id_comentario' => 2, 'id_establecimiento' => 2],
            ['id_comentario' => 3, 'id_establecimiento' => 3],
            ['id_comentario' => 4, 'id_establecimiento' => 4],
            ['id_comentario' => 5, 'id_establecimiento' => 5],
            ['id_comentario' => 6, 'id_establecimiento' => 6],
            ['id_comentario' => 7, 'id_establecimiento' => 7],
            ['id_comentario' => 8, 'id_establecimiento' => 8],
            ['id_comentario' => 9, 'id_establecimiento' => 9],
            ['id_comentario' => 10, 'id_establecimiento' => 10],
            ['id_comentario' => 11, 'id_establecimiento' => 11],
            ['id_comentario' => 12, 'id_establecimiento' => 12],
            ['id_comentario' => 13, 'id_establecimiento' => 13],
            ['id_comentario' => 14, 'id_establecimiento' => 14],
            ['id_comentario' => 15, 'id_establecimiento' => 15],
            ['id_comentario' => 16, 'id_establecimiento' => 16],
            ['id_comentario' => 17, 'id_establecimiento' => 17],
            ['id_comentario' => 18, 'id_establecimiento' => 18],
            ['id_comentario' => 19, 'id_establecimiento' => 19],
            ['id_comentario' => 20, 'id_establecimiento' => 20],
            ['id_comentario' => 21, 'id_establecimiento' => 21],
            ['id_comentario' => 22, 'id_establecimiento' => 22],
            ['id_comentario' => 23, 'id_establecimiento' => 23],
            ['id_comentario' => 24, 'id_establecimiento' => 24],
            ['id_comentario' => 25, 'id_establecimiento' => 25]
        ];
        foreach ($comentarioEstablecimientos as $comentarioEstablecimiento) {
            ComentarioEstablecimiento::create($comentarioEstablecimiento);
        }

        $platos = [
            [
                'id_tipo_comida' => 1,
                'id_tipo_cocina' => 1,
                'descripcion' => 'Pizza Margherita'
            ],
            [
                'id_tipo_comida' => 2,
                'id_tipo_cocina' => 2,
                'descripcion' => 'Tacos al Pastor'
            ],
            [
                'id_tipo_comida' => 3,
                'id_tipo_cocina' => 3,
                'descripcion' => 'Sushi de Salmón'
            ],
            [
                'id_tipo_comida' => 4,
                'id_tipo_cocina' => 4,
                'descripcion' => 'Pollo Kung Pao'
            ],
            [
                'id_tipo_comida' => 5,
                'id_tipo_cocina' => 5,
                'descripcion' => 'Crêpes Suzette'
            ]
        ];
        foreach ($platos as $plato) {
            Plato::create($plato);
        }

        $cartas = [
            ['id_establecimiento' => 1,'id_plato' => 1,'precio'=> 12.50],
            ['id_establecimiento' => 1,'id_plato' => 2,'precio'=> 18.75],
            ['id_establecimiento' => 1,'id_plato' => 3,'precio'=> 25.00],
            ['id_establecimiento' => 1,'id_plato' => 4,'precio'=> 9.50],
            ['id_establecimiento' => 1,'id_plato' => 5,'precio'=> 14.25],
            ['id_establecimiento' => 2,'id_plato' => 1,'precio'=> 15.75],
            ['id_establecimiento' => 2,'id_plato' => 2,'precio'=> 21.00],
            ['id_establecimiento' => 2,'id_plato' => 3,'precio'=> 30.50],
            ['id_establecimiento' => 2,'id_plato' => 4,'precio'=> 12.25],
            ['id_establecimiento' => 2,'id_plato' => 5,'precio'=> 16.50],
            ['id_establecimiento' => 3,'id_plato' => 1,'precio'=> 13.00],
            ['id_establecimiento' => 3,'id_plato' => 2,'precio'=> 19.25],
            ['id_establecimiento' => 3,'id_plato' => 3,'precio'=> 26.75],
            ['id_establecimiento' => 3,'id_plato' => 4,'precio'=> 10.50],
            ['id_establecimiento' => 3,'id_plato' => 5,'precio'=> 15.00],
            ['id_establecimiento' => 4,'id_plato' => 1,'precio'=> 16.25],
            ['id_establecimiento' => 4,'id_plato' => 2,'precio'=> 22.50],
            ['id_establecimiento' => 4,'id_plato' => 3,'precio'=> 31.25],
            ['id_establecimiento' => 4,'id_plato' => 4,'precio'=> 11.75],
            ['id_establecimiento' => 4,'id_plato' => 5,'precio'=> 17.00]
        ];
        foreach ($cartas as $carta) {
            Carta::create($carta);
        }

        $imgEventos = [
            ['id_evento' => 1, 'imagen' => 'default.png'],
            ['id_evento' => 2, 'imagen' => 'default.png'],
            ['id_evento' => 3, 'imagen' => 'default.png'],
            ['id_evento' => 4, 'imagen' => 'default.png'],
            ['id_evento' => 5, 'imagen' => 'default.png']
        ];
        foreach ($imgEventos as $imgEvento){
            ImgEvento::create($imgEvento);
        }

        $comentarioEventos = [
            ['id_comentario' => 1, 'id_evento' => 1],
            ['id_comentario' => 2, 'id_evento' => 2],
            ['id_comentario' => 3, 'id_evento' => 3],
            ['id_comentario' => 4, 'id_evento' => 4],
            ['id_comentario' => 5, 'id_evento' => 5],
        ];
        foreach ($comentarioEventos as $comentarioEvento){
            ComentarioEvento::create($comentarioEvento);
        }
    }
}

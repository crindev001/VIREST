@switch($tipo->id)
    @case('1')
        <h1>Los mejores lugares para hospedarte</h1>
        <h4>Descubre los mejores hoteles para tu próximo viaje.</h4>
        @break
    @case('2')
        <h1>Donde la gastronomía se encuentra con la excelencia</h1>
        <h4>Explora una amplia variedad de sabores en nuestros restaurantes recomendados.</h4>
        @break
    @case('3')
        <h1>Descubre lugares únicos y fascinantes</h1>
        <h4>Sumérgete en la cultura y la historia de los destinos turísticos más destacados.</h4>
        @break
    @case('4')
        <h1>Vive experiencias inolvidables</h1>
        <h4>Encuentra los eventos más emocionantes y participa en actividades increíbles.</h4>
        @break
    @case('5')
        <h1>Deliciosos panes y repostería fresca</h1>
        <h4>Disfruta de productos horneados recién hechos y saborea cada bocado en nuestra panadería.</h4>
        @break
    @default
        <h1>Otros Establecimientos</h1>
@endswitch
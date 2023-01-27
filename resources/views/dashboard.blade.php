@extends('layout.layouts')

@section('titulo')
  Bienvenido a México
@endsection

@section('contenido')

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="https://p4.wallpaperbetter.com/wallpaper/547/779/771/building-mexico-city-mexico-square-wallpaper-preview.jpg" class="card-img-top" alt="Skyscrapers"/>
        <div class="card-body">
          <h5 class="card-title">Palacio de Bellas Artes</h5>
          <p class="card-text">
            El Palacio de Bellas Artes es un recinto cultural ubicado en el Centro Histórico de la Ciudad de México, considerado el más importante en la manifestación de las artes en México y una de las casas de ópera más renombradas del mundo.
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">México</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://www.incluyeme.com.mx/wp-content/uploads/2015/02/mexico-city-wallpaper-9568-10062-hd-wallpapers.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
        <div class="card-body">
          <h5 class="card-title">Plaza de la Constitucion </h5>
          <p class="card-text">La plaza de la Constitución, informalmente conocida como el Zócalo, es la plaza principal de la Ciudad de México. Junto con las calles aledañas, ocupa una superficie casi rectangular de aproximadamente 46 800 m².</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">México</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://c4.wallpaperflare.com/wallpaper/720/259/747/pyramid-of-the-sun-teotihuacan-mexico-wallpaper-preview.jpg" class="card-img-top" alt="Palm Springs Road"/>
        <div class="card-body">
          <h5 class="card-title">Teotihuacan </h5>
          <p class="card-text">
            Teotihuacán es un amplio complejo arqueológico mexicano al noreste de la Ciudad de México. Por el centro del lugar, que alguna vez fue una floreciente ciudad precolombina, pasa la Calzada de los Muertos. Esta une el Templo de Quetzalcóatl, la Pirámide de la Luna y la Pirámide del Sol.
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">México</small>
        </div>
      </div>
    </div>
  </div>
@endsection

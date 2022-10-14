@extends('padrao')
@section('content')

<section>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="{{'/img/moto.webp'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Motos Esportivas</h5>
        <p class="card-text">Encontre aqui as melhores motos esportivas com os melhores preços no mercado!</p>
        <a class="btn btn-outline-warning" href="listarMotos" role="button">Acesse Aqui!</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/Mercedes Benz Classe C.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carros De Luxo</h5>
        <p class="card-text">Encontre aqui os melhores carros de luxo com os melhores preços no mercado!</p>
        <a class="btn btn-outline-warning" href="listarCarro2" role="button">Acesse Aqui!</a>
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/caminhao.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Caminhões</h5>
        <p class="card-text">Encontre aqui os melhores Caminhões com os melhores preços no mercado!</p>
        <a class="btn btn-outline-warning" href="listarCarro" role="button">Acesse Aqui!</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/carro.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carros Esportivos</h5>
        <p class="card-text">Encontre aqui os melhores carros esportivos com os melhores preços no mercado!</p>
        <a class="btn btn-outline-warning" href="listarCarro" role="button">Acesse Aqui!</a>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
@extends('padrao')
@section('content')
<section class="moto1">
<div class="container cadastroMoto">
<form class="row g-3" method="post" action="{{route('salvar-banco-moto')}}">
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<h1></h1>
<div class="text-center">
<h1>Tela de Cadastro</h1>
</div>
  @csrf
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Start 160">

    @error('modelo')
    <div class="fw-bolder">*Preencher o campo modelo. </div>
    @enderror('modelo') 
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca')}}" class="form-control" id="inputMarca" placeholder="Honda">
    @error('marca')
    <div class="fw-bolder">*Preencher o campo marca. </div>
    @enderror('marca')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" value="{{old('ano')}}" class="form-control" id="inputAno" placeholder="2000">
    @error('ano')
    <div class="fw-bolder">*Preencher o campo ano. </div>
    @enderror('ano')  
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor')}}" class="form-control" id="inputCor" placeholder="02569-9874">
    @error('cor')
    <div class="fw-bolder">*Preencher o campo cor. </div>
    @enderror('cor')    
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" name="valor" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor')}}" class="form-control" id="inputZip" placeholder="25.660,23">
    @error('valor')
    <div class="fw-bolder">*Preencher o campo cor. </div>
    @enderror('valor') 
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
</section>
@endsection
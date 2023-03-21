@extends('padrao')

@section('content') 
  <form>
  <div class="container mt-4">
        <form class="row g-3">
            <div class="col-md-12">
                <label for="nome" class="form-label">Filme</label>
                <input type="text" class="form-control" id="nome">
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Sala</label>
                <input type="email" class="form-control" id="email">
            </div>
        
            <div class="col-6">
                <label for="celPart" class="form-label">Data</label>
                <input type="date" class="form-control" id="dataa">
            </div>
            <div class="col-6">
                <label for="celComer" class="form-label">Hora</label>
                <input type="time" class="form-control" id="horaa">
            </div>
                <br>
                <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
  
@endsection
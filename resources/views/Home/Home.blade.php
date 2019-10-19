@extends('template.principal')
@section('conteudo')
<div class="card text-white bg-danger mb-3" style="max-width: 15rem; margin-left:-400px;margin-top:-200px,">
        <div class="card-header">DESPESA </div>
        <div class="card-body">
          <h5 class="card-title">R$ 450,00</h5>
          <p class="card-text">MÊS ATUAL</div>
</div>  

<div class="card text-white bg-info mb-3" style="max-width: 15rem;margin-left:-130px;margin-top:-160px">
        <div class="card-header">RECEITA</div>
        <div class="card-body">
          <h5 class="card-title">R$ 2000,00</h5>
          <p class="card-text">MÊS ATUAL</p>
        </div>
      </div> 

      <div class="card text-white bg-success mb-3" style="max-width: 15rem;margin-left:140px;margin-top:-160px">
        <div class="card-header">Saldo Total</div>
        <div class="card-body">
          <h5 class="card-title">R$ 1600,00</h5>
          <p class="card-text">MÊS ATUAL</p>
        </div>
      </div> 
      
@endsection
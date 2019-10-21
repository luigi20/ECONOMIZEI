@extends('template.principal')
@section('conteudo')

   <div class="container-form-addTipoDespesa" >
    <form>
        @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nome</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Nome">
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Tipo de Receita</label>
          <select id="inputState" class="form-control">
            <option selected value="0">Selecione</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Valor R$</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Valor">
        </div>
      </div>
      
      
      <input type="submit" class="btn btn-success" value="Salvar" style="margin-left:950px; margin-top:286px"/>
    </form>
              
</div>
@endsection


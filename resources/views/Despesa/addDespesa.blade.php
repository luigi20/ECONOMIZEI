@extends('template.principal')
@section('conteudo')

   <div class="container-form-addTipoDespesa" >
    <form>
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nome</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Tipo de Despesa</label>
            <select id="inputState" class="form-control">
              <option selected value="0">Selecione</option>
            </select>
          </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Valor R$</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Situação</label>
          <select id="inputState" class="form-control">
              <option selected value="0">Selecione</option>
             
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Vencimento</label>
        <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCity">Numero de Parcelas</label>
          <select id="inputState" class="form-control">
              <option selected value="0">Selecione...</option>
             
              @for ($i=1;$i <=12;$i++)
                <option>{{$i}}</option>
              @endfor
          
            </select>
        </div>
        
        <div class="form-group col-md-6">
          <label for="inputZip">Valor da Parcela R$</label>
          <input type="text" class="form-control" id="inputZip" disabled>
        </div>
      </div>
    
      <input type="submit" class="btn btn-success" value="Salvar" style="margin-left:950px; margin-top:82px"/>
    </form>
              
</div>
@endsection


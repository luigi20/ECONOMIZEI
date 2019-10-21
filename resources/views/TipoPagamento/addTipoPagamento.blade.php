@extends('template.principal')
@section('conteudo')

   <div class="container-form-addTipoDespesa" >
        <form action="" method="POST">
          @csrf  
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nome</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descricao</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Salvar" style="margin-left:950px; margin-top:240px"/>
              </form>
              
</div>
@endsection


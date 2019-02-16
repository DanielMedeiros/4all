@include('layout._includes.topo')
<div class="jumbotron">    
     
</div>

<h4>Voltar para home <a href="{{ route('home') }}"><i class="fas fa-undo"></i></a></h4>

<div class="container" style="height: 780px;">
  
  <div class="row" style="margin-top: 100px;">
    <h1>{{ $evento->nome_evento }}</h1>
   <p>{{ $evento->resumo_evento }}</p>

   <div style="display: flex; flex-direction: column;">
       <p class="card-text" style="font-weight: bold;">DATA: {{ $evento->created_at->format('d/m/Y') }} | HORÁRIO: {{ $evento->created_at->format('H:i') }} HS</p>
       <p class="card-text" style="font-weight: bold;">LOCAL: {{ $evento->local_evento }}</p>
       <p class="card-text" style="font-weight: bold;">a partir de R$ {{ $evento->valor }}</p>
   </div>
</div>
<button type="button" id="btncompra" style="margin-top: 50px;" class="btn btn-danger">
  COMPRAR INGRESSOS
</button>

</div>

<!-- Modal -->
<div class="modal fade" id="compraModal" tabindex="-1" role="dialog" aria-labelledby="compraModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EVENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>{{ $evento->nome_evento }}</h3>
        <h5>{{ $evento->created_at->format('d/m/Y') }} - {{ $evento->cidade_evento }} / Rio Grande do Sul</h5>
        <h5>PASSAPORTE {{ $evento->nome_evento }} - ADULTO - 1º LOTE</h5>
          <select class="form-control" name="ticket" id="selectTicket" onchange="calcValor();">
              <option value="50">INTEIRA R$ 50,00</option>
              <option value="25">MEIA ENTRADA R$ 25,00</option>
              <option value="20">ESTUDANTE ENTRADA R$ 20,00</option>       
        </select> 
        <div style="display: flex; flex-direction: row; margin-top: 15px; margin-bottom: 15px;">
          <h5 style="padding-right: 10px;">QUANTIDADE:  </h5>
          <input style="text-align: center;" type="number" value="1" id="quantidade" name="quantidade" min="1" max="8" onchange="calcValor();"> 
        </div>
        <div style="display: flex; flex-direction: row">
          <h5>TOTAL: R$  </h5>
          <h5 id="total" style="padding-left: 5px;"></h5>
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
        <button type="button" class="btn btn-primary">COMPRAR</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal --> 
@include('layout._includes.footer')
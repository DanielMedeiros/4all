@include('layout._includes.topo')
<div class="jumbotron">    
        {{-- <div class="container">
          <h1 class="display-3">Hello, world!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div> --}}
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
<button type="button" style="margin-top: 50px;" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  COMPRAR INGRESSOS
</button>
{{-- <button type="button" id="comprar" class="btn btn-danger">COMPRAR INGRESSO</button> --}}
 
</div>

<!-- Modal -->
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: black;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">EVENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>{{ $evento->nome_evento }}</h3>
        <h5>{{ $evento->created_at->format('d/m/Y') }} - {{ $evento->cidade_evento }} / Rio Grande do Sul</h5>
        <h5>PASSAPORTE {{ $evento->nome_evento }} - ADULTO - 1º LOTE</h5>
          <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
        </select>        
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
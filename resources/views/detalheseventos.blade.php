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
    <h1>FENADOCE</h1>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

   <div style="display: flex; flex-direction: column;">
       <p class="card-text" style="font-weight: bold;">DATA: 26-06-2019 | HORÁRIO: 23:00 HS</p>
       <p class="card-text" style="font-weight: bold;">LOCAL: CENTRO DE EVENTOS</p>
       <p class="card-text" style="font-weight: bold;">a partir de R$ 15,00</p>
   </div>
</div>
<div style="float: right;">
<button type="button" style="margin-top: 50px;" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  COMPRAR INGRESSOS
</button></div>
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
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EVENTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>FENADOCE</h3>
        <h5>26-06-2019 - Pelotas / Rio Grande do Sul</h5>
        <h5>PASSAPORTE FENADOCE - ADULTO - 1º LOTE</h5>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <input type="text" class="form-control" id="portador" placeholder="nome do portador">
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
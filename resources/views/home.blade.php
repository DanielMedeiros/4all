@include('layout._includes.topo')

    <div class="container">     
    <h1>Lista de Eventos:</h1>
    <h3>Eventos RS</h3>
   <div class="card-deck">
  <div class="card">
    <a href="{{ route('detalheseventos') }}">
    <img  class="card-img-top" src="img/evento_1.jpg" alt="Card image cap"></a>
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Pelotas - RS</h5>
      <p class="card-text">FENADOCE</p>
      <p class="card-text">DATA: 26-06-2019 | HORÁRIO: 23:00 HS</p>
      <p class="card-text">LOCAL: CENTRO DE EVENTOS</p>
    </div>
    <div class="card-footer" style="text-align: center;">
      <small class="text-muted">a partir de R$ 15,00</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/evento_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer" style="text-align: center;">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/evento_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer" style="text-align: center;">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/evento_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer" style="text-align: center;">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/evento_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer" style="text-align: center;">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/evento_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer" style="text-align: center;">
      <small class="text-muted" >Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>
@include('layout._includes.footer')

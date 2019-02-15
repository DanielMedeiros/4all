@include('layout._includes.topo')

    <div class="container">     
    <h1>Lista de Eventos:</h1>
    <h3>Eventos RS</h3>
    @foreach($eventos as $evento)
    <div class="card-deck">
      <div class="card">
        <a href="{{ route('detalheseventos', $evento->id) }}">
        <img  class="card-img-top" src="{{ asset($evento->imagem_evento) }}" alt="Card image cap" title="{{ $evento->nome_evento }}" /></a>
        <div class="card-body">          
          <h5 class="card-title" style="text-align: center;">{{ $evento->cidade_evento }}</h5>       
          <p class="card-text" style="font-weight: bold;">{{ $evento->nome_evento }}</p>
          <p class="card-text">DATA: {{ $evento->created_at->format('d/m/Y') }} | HORÁRIO: {{ $evento->created_at->format('H:i') }} HS</p>
          <p class="card-text">LOCAL: {{ $evento->local_evento }}</p>          
        </div>
        <div class="card-footer" style="text-align: center;">
          <small class="text-muted" style="font-weight: bold;">a partir de R$ {{ $evento->valor }}</small>
        </div>
      </div>
   @endforeach
</div>
  {{-- <div class="card">
    <img class="card-img-top" src="img/evento_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">{{ $evento->nome_evento }}</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer" style="text-align: center;">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/evento_1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">{{ $evento->nome_evento }}</h5>
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
      <h5 class="card-title" style="text-align: center;">Card Title</h5>
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
  </div> --}}
</div>

</div>
@include('layout._includes.footer')

@include('layout._includes.topo')
    <div class="container">     
    <h1>Lista de Eventos:</h1>
    <h3>Eventos RS</h3>
    @foreach($eventos as $evento)
    <div class="card-deck">
      <div class="card">
        <a href="{{ route('detalheseventos', $evento->id) }}">
        <img  class="card-img-top"  src="{{ asset($evento->imagem_evento) }}" alt="Card image cap" title="{{ $evento->nome_evento }}" /></a>
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
  </div>  
   @endforeach
</div>

@include('layout._includes.footer')

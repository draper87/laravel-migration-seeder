<h1>Elenco Smartphone</h1>

@foreach ($phones as $phone)
  <div class="phone">
    <h2>{{ $phone->brand }} {{ $phone->modello }}</h2>
    <ul>
      <li>Chipset: {{ $phone->chipset }}</li>
      <li>Display Size: {{ $phone->display_size }} inch</li>
    </ul>
  </div>
@endforeach

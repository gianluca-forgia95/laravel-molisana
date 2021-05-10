@extends('layouts.main')

@section('title-page')
Prodotti  
@endsection

@section('content')
<main class="bg-light">
  <div class="container" id="products">
      <div class="arrow">
          <a href=""><i class="fas fa-chevron-left"></i></a>
      </div>
    <div class="box-product">
      <h1>{{ $pasta['titolo']}}</h1>
      <img src="{{ $pasta['src-h']}}" alt="">
      <img src="{{ $pasta['src-p']}}" alt="">
      <p>{{ $pasta['descrizione'] }}</p>
    </div>

    <div class="arrow">
        <a href=""><i class="fas fa-chevron-right"></i></a>
    </div>

  </div>
    
</main>
    
@endsection
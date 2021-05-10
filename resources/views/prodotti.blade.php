@extends('layouts.main')

@section('title-page')
Prodotti  
@endsection

@section('content')
<main class="bg-light">
  <div class="container" id="products">     
{{-- Prev Arrow --}}
    <div class="prev">
        @if ($id > 0) 
            <a href=" {{ route('prodotti', $id - 1) }}"><i class="fas fa-chevron-left"></i></a>
        @endif
    </div>
{{-- /Prev Arrow --}}
{{-- Product --}}
    <div class="box-product">
      <h1>{{ $pasta['titolo']}}</h1>
      <img src="{{ $pasta['src-h']}}" alt="">
      <img src="{{ $pasta['src-p']}}" alt="">
      <p>{!! $pasta['descrizione'] !!}</p>
    </div> 
{{-- /Product --}}
{{-- Next Arrow --}}
    <div class="next">
        @if ($id < $length) 
            <a href=" {{ route('prodotti', $id + 1) }}"><i class="fas fa-chevron-right"></i></a>
        @endif
    </div>
 {{-- /Next Arrow --}}

    

  </div>
    
</main>
    
@endsection
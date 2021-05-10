@extends('layouts.main')

@section('title-page')
Prodotti  
@endsection

@section('fontawesomeLink')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
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
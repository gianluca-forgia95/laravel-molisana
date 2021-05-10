<footer>
    
  <div class="container list-info">
      {{-- Column 1--}}
        <div class="list-column">
        {{-- Logo --}}
            <div class="logo">
                <img src="{{ asset('images/marchio-sito-test.png')}}" alt="Logo">
            </div>
        {{-- /Logo --}}
        {{-- List Contacts --}}
        @foreach ($contatti as $infoContatti)
        <ul>
          <li>{{ $infoContatti }}</li>
        </ul>
        @endforeach
        {{-- /List Contacts --}}
        </div>
     {{-- /Column 1--}}
      {{-- Column 2--}}
        <div class="list-column">
        {{-- Pastificio --}}
            <h3>Pastificio</h3>
            @foreach ($pastificio as $infoPastificio)
            <ul class="list-footer" >
              <li>{{ $infoPastificio }}</li>
            </ul>
            @endforeach
        {{-- /Pastificio --}}
        {{-- Prodotti --}}
        <h3>Prodotti</h3>
        @foreach ($productsInfo as $prodotti)
         <ul>
           <li>{{ $prodotti }}</li>
         </ul>
         @endforeach
        {{-- /Prodotti --}}
        </div>
     {{-- /Column 2--}}
     {{-- Column 3--}}
     <div class="list-column">
     {{-- Collezione --}}
       <h3>Collezione da Chef</h3>
       @foreach ($collezione as $infoCollezione)
         <ul>
           <li>{{ $infoCollezione }}</li>
         </ul>
         @endforeach
    {{-- /Collezione --}}
     </div>
     {{-- /Column 3--}}
  </div>


</footer>
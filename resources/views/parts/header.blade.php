<header>
    <div class="container container-header">
    {{-- Logo --}}
      <div class="logo">
         <img src="{{ asset('images/marchio-sito-test.png')}}" alt="">
      </div>
    {{-- /Logo --}}
    {{-- Nav Header --}}
      <div class="nav-header">
         <ul>
             <li class="active"><a href="{{ route('homepage')}}">Home</a></li>
             <li><a href="{{ route('prodotti' , [ 'id' => 0])}}">Prodotti</a></li>
             <li><a href="{{ route('news')}}">News</a></li>
         </ul>
      </div>
    {{-- /Nav Header --}}
     </div>
    </header>
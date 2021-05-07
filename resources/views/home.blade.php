<!DOCTYPE html>
<html lang="en">
@include('parts/head')
<body>
{{-- Header Incluso --}}
 @include('parts.header')
{{-- /Header Incluso --}}
{{-- Main --}}
    <main class="bg-main">
      <div class="container">
       {{-- Paste Lunghe --}}
        <section>
          <h2>Le Lunghe</h2>
          <div class="container-boxes">
              @foreach ($lunghe as $pasta)
              <div class="box">
                <img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}">
              </div>
              @endforeach
          </div>
        </section>
       {{-- /Paste Lunghe --}}

        {{-- Paste Corte --}}
        <section>
            <h2>Le Corte</h2>
            <div class="container-boxes">
                @foreach ($corte as $pasta)
                <div class="box">
                  <img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}">
                </div>
                @endforeach
            </div>
          </section>
         {{-- /Paste Corte --}}

          {{-- Paste Cortissime --}}
        <section>
            <h2>Le Cortissime</h2>
            <div class="container-boxes">
                @foreach ($cortissime as $pasta)
                <div class="box">
                  <img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}">
                </div>
                @endforeach
            </div>
          </section>
         {{-- /Paste Cortissime --}}
      </div>

    </main>
{{--/Main --}}
{{-- Footer Incluso --}}
@include('parts/footer')
{{-- /Footer Incluso --}}
</body>
</html>
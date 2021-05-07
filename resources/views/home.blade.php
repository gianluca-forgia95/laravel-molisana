<!DOCTYPE html>
<html lang="en">
@include('parts/head')
<body>
{{-- Header Incluso --}}
 @include('parts.header')
{{-- /Header Incluso --}}
    <main>
      <div class="container">
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
      </div>

    </main>

{{-- Footer Incluso --}}
@include('parts/footer')
{{-- /Footer Incluso --}}
</body>
</html>
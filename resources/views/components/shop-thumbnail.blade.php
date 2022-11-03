<div>
  @if(empty($filename))
      <img src="{{ asset('images/NoIMG.png') }}" class="border">
  @else
      <img src="{{ asset('storage/shops/' . $filename) }}">
  @endif
</div>
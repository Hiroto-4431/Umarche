@php
if($type === "shops") {
    $path = 'storage/shops/';
}
if($type === "products") {
    $path = 'storage/products/';
}
@endphp

<div>
    @if(empty($filename))
        <img src="{{ asset('images/NoIMG.png') }}" class="border">
    @else
        <img src="{{ asset($path . $filename) }}">
    @endif
</div>
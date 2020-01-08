@foreach($products as $product)
    <a href="{{route('product.show',['product'=>$product])}}">
        {{$product->name}}
    </a>
    - {{$product->price}} CHF<br>
@endforeach
<a href="{{route('product.create')}}">Produkt erstellen</a>

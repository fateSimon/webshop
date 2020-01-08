@foreach($products as $product)
    <a href="{{route('product.show',['product'=>$product->id])}}">
        {{$product->name}}
    </a>
    - {{$product->price}} CHF<br>
@endforeach

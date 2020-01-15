@foreach($products as $product)
    <a href="{{route('product.show',['product'=>$product])}}">
        {{$product->name}}
    </a>
    <form action="{{ route('product.destroy',['product'=>$product]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button>[x]</button>
    </form>
    <br>
@endforeach

<a href="{{route('product.create')}}">Neues Produkt</a>

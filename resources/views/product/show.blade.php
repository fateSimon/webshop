<h1>Shop</h1>
<h1>{{$product->name}}</h1>
<br>
<price>{{$product->price}} CHF</price>
<p>
    {{$product->description}}
</p>
<br>
<a href="{{route('product.index')}}">Zur Übersicht</a>
<a href="{{route('product.edit',['product'=>$product->id])}}">Produkt bearbeiten</a>

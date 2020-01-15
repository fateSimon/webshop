<h1>Shop</h1>
<h1>{{$category->name}}</h1>
<br>
<price>{{$category->price}} CHF</price>
<p>
    {{$category->description}}
</p>
<br>
<a href="{{route('category.index')}}">Zur Übersicht</a>
<a href="{{route('category.edit',['category'=>$category->id])}}">Produkt bearbeiten</a>

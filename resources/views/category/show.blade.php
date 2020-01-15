<h1>Kategorie</h1>
<h1>{{$category->name}}</h1>

<br>
<a href="{{route('category.index')}}">Zur Übersicht</a>
<a href="{{route('category.edit',['category'=>$category->id])}}">Kategorie bearbeiten</a>

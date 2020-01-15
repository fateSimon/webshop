@foreach($categories as $category)
    <a href="{{route('category.show',['category'=>$category])}}">
        {{$category->name}}
    </a>

@endforeach
<a href="{{route('category.create')}}">Neue Kategorie</a>

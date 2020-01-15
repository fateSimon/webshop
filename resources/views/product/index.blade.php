@foreach($categories as $category)
    <a href="{{route('category.show',['category'=>$category])}}">
        {{$category->name}}
    </a>
    <form action="{{ route('category.destroy',['category'=>$category]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button>[x]</button>
    </form>
    <br>
@endforeach

<a href="{{route('category.create')}}">Neue Kategorie</a>

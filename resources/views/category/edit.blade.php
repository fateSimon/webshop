@include('partials.errors')

<form action="{{route('category.update',['category'=>$category])}}" method="POST">
    @csrf
    @method('PUT')
    <label for ="name">@lang ('category.name')</label><input type="text" name="name" value="{{$category->name}}">
    <label for ="name">@lang ('category.price')</label><input type="text" name="price" value="{{$category->price}}">
    <label for ="name">@lang ('category.description')</label><input type="text" name="description" value="{{$category->description}}">
    <input type="submit" value="@lang ('category.submit')">
</form>

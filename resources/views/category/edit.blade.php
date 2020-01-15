@include('partials.errors')

<form action="{{route('category.update',['category'=>$category])}}" method="POST">
    @csrf
    @method('PUT')
    <label for ="name">@lang ('category.name')</label><input type="text" name="name" value="{{$category->name}}">

    <input type="submit" value="@lang ('category.submit')">
</form>

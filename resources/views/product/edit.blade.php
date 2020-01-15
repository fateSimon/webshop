@include('partials.errors')

<form action="{{route('product.update',['product'=>$product])}}" method="POST">
    @csrf
    <label for ="name">@lang ('product.name')</label><input type="text" name="name" value="{{$product->name}}">
    <label for ="name">@lang ('product.price')</label><input type="text" name="price" value="{{$product->price}}">
    <label for ="name">@lang ('product.description')</label><input type="text" name="description" value="{{$product->description}}">
    <input type="submit" value=@lang ('product.submit')>
</form>

<form action="{{route('product.update',['product'=>$product])}}" method="POST">
    @csrf
    <input type="text" name="name" value="{{$product->name}}">
    <input type="text" name="price" value="{{$product->price}}">
    <input type="submit">
</form>

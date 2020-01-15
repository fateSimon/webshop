@include('partials.errors')

<form action="{{route('product.update',['product'=>$product])}}" method="POST">
    @csrf
    <label for ="name">Produktname</label><input type="text" name="name" value="{{$product->name}}">
    <label for ="name">Preis</label><input type="text" name="price" value="{{$product->price}}">
    <label for ="name">Produktbeschreibung</label><input type="text" name="description" value="{{$product->description}}">
    <input type="submit" value="Ändern">
</form>

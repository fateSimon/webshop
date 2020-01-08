<form action="{{route('product.store')}}" method="POST">
    @csrf
    <input type="text" name="name" value="Produktname">
    <input type="text" name="price" value="Preis">
    <input type="text" name="description" value="Beschreibung">

    <input type="submit">
</form>

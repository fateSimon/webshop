@include('partials.errors')

<form action="{{route('product.store')}}" method="POST">
    @csrf

    <label for ="name">Produktname</label> <input type="text" name="name" value="">
    <label for ="price">Preis</label> <input type="text" name="price" value="">
    <label for ="text">Produktbeschreibung</label> <input type="text" name="description" value="">

    <input type="submit" value="Produkt erstellen">
</form>

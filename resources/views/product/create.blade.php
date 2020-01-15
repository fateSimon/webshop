@include('partials.errors')


<form action="{{route('product.store')}}" method="POST">
    @csrf

    <label for ="name">@lang ('product.name')</label> <input type="text" name="name" value="">
    <br>
    <label for ="price">@lang ('product.price') </label> <input type="text" name="price" value="">
    <br>
    <label for ="text">@lang ('product.description')</label> <input type="text" name="description" value="">
    <br>
    <select name="topX">
        <option>Uhren</option>
    </select>

    <input type="submit" value="Produkt erstellen">
</form>


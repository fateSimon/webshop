@include('partials.errors')

<form action="{{route('product.store')}}" method="POST">
    @csrf

    <label for ="name">@lang ('product.name')</label> <input type="text" name="name" value="">
    <label for ="price">@lang ('product.price') </label> <input type="text" name="price" value="">
    <label for ="text">@lang ('product.description')</label> <input type="text" name="description" value="">

    <input type="submit" value="Produkt erstellen">
</form>

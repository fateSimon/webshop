@include('partials.errors')

<form action="{{route('category.store')}}" method="POST">
    @csrf

    <label for ="name">@lang ('category.name')</label> <input type="text" name="name" value="">
    <label for ="price">@lang ('category.price') </label> <input type="text" name="price" value="">
    <label for ="text">@lang ('category.description')</label> <input type="text" name="description" value="">

    <input type="submit" value="Produkt erstellen">
</form>


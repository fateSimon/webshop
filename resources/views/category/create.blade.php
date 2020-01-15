@include('partials.errors')

<form action="{{route('category.store')}}" method="POST">
    @csrf

    <label for ="name">@lang ('category.name')</label> <input type="text" name="name" value="">


    <input type="submit" value="Kategorie erstellen">
</form>


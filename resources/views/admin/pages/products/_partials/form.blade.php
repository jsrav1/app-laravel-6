@include('admin.includes.alerts')

@csrf
<div class="form-group container-sm">
    <label></label>
    <input type="text" class="form-control" name="name" placeholder="Nome:"
        value="{{ $product->name ?? old('name') }}">
</div>
<div class="form-group container-sm ">
    <label></label>
    <input type="text" class="form-control" name="price" placeholder="Preço:"
        value="{{ $product->price ?? old('price') }}">
</div>
<div class="form-group container-sm ">
    <label></label>
    <input type="text" class="form-control" name="description" placeholder="Descrição:"
        value="{{ $product->description ?? old('description') }}">
</div>
<div class="form-group container-sm ">
    <label></label>
    <input type="file" class="form-control" name="image">
    <label></label>

</div>

<form class="form mb-3">
</form>

<form class="container-sm">
    <button type="submit" class="btn btn-success">Enviar</button>
</form>

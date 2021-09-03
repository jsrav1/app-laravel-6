@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')
    <form class="container-sm">
        <h1>Exibindo os produtos</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar</a>
    </form>

    <hr>

    <form action="{{ route('products.search') }}" method="post" class="form form-inline container-sm">
        <div class="col-lg-3 mb-3">
            @csrf
            <input type="text" name="filter" placeholder="Filtrar:" class="form form-control"
                value="{{ $filters['filter'] ?? '' }}">
            <hr>

            <button type="submit" class="btn btn-info ">Pesquisar</button>
        </div>
    </form>

    <table class="table table-striped container-sm">
        <thead>
            <tr>
                <th width="200">Imagem</th>
                <th width="200">Name</th>
                <th width="200">Preço</th>
                <th width="200">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        @if ($product->image)
                            <img src="{{ url("storage/{$product->image}") }}" alt="{{ $product->name }}"
                                style="max-width:100px">
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                        <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (isset($filters))
        {!! $products->appends($filters)->links() !!}
    @else
        {!! $products->links() !!}
    @endif

@endsection

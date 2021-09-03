@extends('admin.layouts.app')

@section('title', "Editar Produto {$product->name}")

@section('content')
    <form class="container-sm">
        <h1>Editar Produto {{ $product->name }}</h1>
    </form>

    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.pages.products._partials.form')
    </form>

@endsection

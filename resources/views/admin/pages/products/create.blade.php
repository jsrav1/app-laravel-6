@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')

    <form class="container-sm">
        <h1>Cadastrar Novo Produto</h1>
    </form>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">

        @include('admin.pages.products._partials.form')

    </form>

@endsection

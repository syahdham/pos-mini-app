@extends('layouts.app')

@section('title', 'Product')

@section('content')

    <x-page-index label="Product" route="products.create" :dataTable="$dataTable" />

@endsection

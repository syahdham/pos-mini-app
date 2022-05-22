@extends('layouts.app')

@section('title', 'Category')

@section('content')

    <section>
        <x-page-index label="Category" route="categories.create" :dataTable="$dataTable" />
    </section>

@endsection

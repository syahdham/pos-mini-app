@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

    <x-page-form label="Product">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="text-right">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>

            <x-form-input label="Name" required="required" type="text" name="name"/>
            <x-form-input label="Price" required="required" type="number" name="price"/>
            <x-form-select label="Category" required="required" :values="$categories" name="category_id"/>
            <x-form-text-area label="Description" required="required" name="description"/>
            <x-form-image label="Image" required="required" name="product_file"/>

        </form>
    </x-page-form>

@endsection

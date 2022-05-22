@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')

    <x-page-form label="Category">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text-right">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>

            <x-form-input label="Name" required="required" type="text" name="name" value="{{ $category->name }}"/>
        </form>
    </x-page-form>

@endsection

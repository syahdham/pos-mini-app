@extends('layouts.app')

@section('title', 'Show Category')

@section('content')

    <x-page-form label="Category">
        <x-form-input label="Name" required="required" type="text" name="name" value="{{ $category->name }}" disabled="disabled"/>
    </x-page-form>

@endsection

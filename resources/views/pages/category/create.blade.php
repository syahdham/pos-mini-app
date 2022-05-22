@extends('layouts.app')

@section('title', 'Create Category')

@section('content')

        <x-page-form label="Category">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="text-right">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

                <x-form-input label="Name" required="required" type="text" name="name"/>
            </form>
        </x-page-form>

@endsection

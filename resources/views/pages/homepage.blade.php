@extends('layouts.app')

@section('title', 'Homepage')

@push('styles')

    <style>
        .container-fluid {
            width: 80%;
            font-family: 'Open Sans', Arial, sans-serif;
        }

        .section-header p {
            font-weight: bolder;
            font-size: 33px;
        }

        .body {
            margin-bottom: 100px;
        }

        .price {
            font-weight: bolder;
            font-size: 20px;
        }

        .desc {
            font-size: 13px;
            font-weight: bold;
        }

    </style>

@endpush

@section('content')
    <div class="container-fluid">
        <div class="section-header my-lg-3 ml-3">
            <p>{{ 'Produk' }}</p>
        </div>

        <div class="col-md-12 body">
            <div class="row">
                @forelse($products as $key => $product)
                    <x-card-home-page :product="$product" :key="$key" />
                @empty
                    <div class="text-center m-auto">
                        <h4>No data</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

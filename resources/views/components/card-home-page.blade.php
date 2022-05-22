<div class="col-sm-12 col-md-6 col-lg-auto col-lg-3 mb-3">
    <div class="card h-100">
        <img src="{{ $product->getFirstMediaUrl("product-image") }}" alt="Product image" width="100%"/>
        <div class="card-body d-flex flex-column">
            <div class="text-center">
                <div class="card-title">
                    <p class="name mb-4">
                        <strong>{{ $product->name }}</strong>
                    </p>
                    <div class="price">
                        @if($key == 0 OR $key == 3)
                            <p>
                                <sup style="top: -0.4em">Rp </sup>{{ fmt_currency($product->price) }}
                            </p>
                        @else
                            <p><sup style="top: -0.2em">Rp&nbsp;&nbsp; </sup>{{ fmt_currency($product->price) }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-text mt-2 mb-lg-5">
                <span class="desc">{!! $product->description !!} </span>
            </div>
            <div class="text-center mt-auto">
                <a href="#" class="btn btn-primary">{{ 'Beli' }}</a>
            </div>
        </div>
    </div>
</div>

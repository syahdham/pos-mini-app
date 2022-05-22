<section>
    <div class="container my-lg-5">
        <div class="section-header my-lg-5">
            <h1>{{ $label }}</h1>
        </div>

        <div class="section-body">
            <div class="card py-3">
                <div class="col-md-12">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>

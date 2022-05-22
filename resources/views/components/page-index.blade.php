@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/datatables/dataTables.bootstrap4.min.css') }}">
@endpush

<section>
    <div class="container">
        <div class="section-header my-lg-5">
            <h1>{{ $label }}</h1>
        </div>

        <div class="section-body">
            <div class="mb-3">
                <a href="{{ route($route) }}" class="btn btn-primary">Create {{ $label }}</a>
            </div>
            <div class="card py-3" style="margin-bottom: 100px">
                <div class="col-md-12">
                    <x-alert/>
                    <div class="table-responsive">
                        {{ $dataTable->table(['class' =>'table table-striped']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')

    <!-- Datatable -->
    <script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/dataTable.button.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/dataTable.button.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

    {{ $dataTable->scripts() }}
@endpush

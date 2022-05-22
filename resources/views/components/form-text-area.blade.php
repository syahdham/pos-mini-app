<div class="form-group row mb-4">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $label }}
        <span class="text-danger">{{ $required ? '*' : '' }}</span>
    </label>
    <div class="col-sm-12 col-md-5">
        <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" rows="5" id="editor">{{ old($name) }}</textarea>
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

@push('scripts')

    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush

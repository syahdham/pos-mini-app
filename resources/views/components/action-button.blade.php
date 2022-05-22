<div class="table-actions btn-group">
    <a href="{{ route($route.'.show', $data) }}" class="table-action btn btn-info mr-2" data-toggle="tooltip" title="Lihat">
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route($route.'.edit',  $data ) }}" class="table-action btn btn-primary mr-2" data-toggle="tooltip" title="Ubah">
        <i class="fa fa-edit"></i>
    </a>
    <form action={{ route($route.'.destroy',  $data ) }} method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="table-action-delete btn btn-danger"
                data-toggle="tooltip" title="Hapus" onclick="return confirm('@php echo 'Are you sure delete ' . $data->name . '?' @endphp')"><i
                class="fa fa-trash"></i></button>
    </form>
</div>

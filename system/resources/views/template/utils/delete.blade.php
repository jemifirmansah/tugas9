<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm( 'Yakin akan menghapus data ini?' )">
    @csrf
    @method("delete")
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>
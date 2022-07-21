<form action= "{{ url($url, $id) }}" method="POST" onsubmit="return confirm('apakah anda yakin ingin menghapus data ini?')">
    @csrf
    @method("delete ")
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
  </form>

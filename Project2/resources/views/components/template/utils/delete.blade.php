<form action= "{{ url('') }}" method="POST" onsubmit="return confirm('apakah anda yakin ingin menghapus data ini?')">
    @csrf
    @method("delete ")
    <a href="{{ url('admin/master-data/module/delete-role', $role->id) }}" 
        class="btn btn-danger">
         <i class="fa fa-trash"></i> Hapus
     </a>
  </form>

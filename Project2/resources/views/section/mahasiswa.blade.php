@section('profil')
    <div class="col-md-12 text-center pt-3">
        <img src="{{ url('/') }}/asset/user.png" class="rounded-circle mx-auto " width="120px" height="120px"
            alt="...">
        <div class="card-body">
            <p class="card-text" style="text-align: center">
                {{ Auth::guard('mahasiswa')->user()->nama }}
            </p>
        </div>
    </div>
@endsection

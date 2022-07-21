@foreach(['success','warning','danger'] as $status)
  @if(session($status))
  <div class="alert alert-{{$status}}" alert-dismissable custom-{{$status}}-box>
      <a href="" class="float-end close" data-dismiss="alert" aria-lable="close">&times;</a>
      <strong>{{session($status)}}</strong>
  </div>
  @endif
@endforeach
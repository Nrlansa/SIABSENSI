<a class="nav-link  @if ($active) active @endif " href="{{ url($url) }}">
    <div class="sb-nav-link-icon"><i class="fas fa-{{ $icon }}"></i></div>
    {{ $title }}
</a>
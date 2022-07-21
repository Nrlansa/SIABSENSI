<a href="{{ url($url) }}" class="box" style="
                        background: {{ $color }};
                        ">
    <span class="title">{{ $title }}</span>
    <span class="subtitle">{{ $subtitle }}</span>
</a>

@once
    <style>
        a.box {
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            padding: 10px;
            color: white;
            transition: .3s all;
        }
        a.box:hover {
            background-color: rgb(48, 65, 56) !important;
            font-size: 120%;
            border: 3px solid white;
            border-radius: 15px;
        }
        .box .subtitle {
            font-size: 12px;
        }
        .box .title {
            font-size: 15px;
        }
    </style>
@endonce
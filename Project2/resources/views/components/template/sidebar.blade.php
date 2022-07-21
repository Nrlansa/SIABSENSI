<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" style="background-color: #BEDAC7" >
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-dark">
                    @include('menu.' . $menu)
                </div>
            </div>     
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
                @if(auth()->guard('mahasiswa')-> user())
                {{auth()->guard('mahasiswa')->user()->nama}}
                @elseif (auth()->user())
                {{auth()->user()->nama}}
                @endif
        </div>
    </nav>
</div>

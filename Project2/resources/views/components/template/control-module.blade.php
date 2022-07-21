<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-th-large"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="p-3" style="
                        display:flex;
                        width: 18rem;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        gap:10px;
                        ">
                            @foreach (auth()->user()->role as $role)
                            <x-template.module-box color="{{ $role->module->color }}"
                                                url="{{ $role->module->url }}"
                                                title="{{ $role->module->title }}"
                                                subtitle="{{ $role->module->subtitle }}" />
                            @endforeach

                        </div>
                </div>
            </li>
        </ul>


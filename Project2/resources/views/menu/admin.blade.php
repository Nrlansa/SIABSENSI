<x-template.menu.menu-link title="Dashboard" url="admin/dashboard" icon="home" />

{{-- <x-template.menu.menu-link title="Laporan" url="admin/laporan" icon="scroll" /> --}}

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
    aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fa fa-archive"></i></div>
    Master Data
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <x-template.menu.menu-item title="Pegawai" url="admin/master-data/pegawai" />
        <x-template.menu.menu-item title="Mahasiswa" url="admin/master-data/mahasiswa" />
        <x-template.menu.menu-item title="Mata Kuliah" url="admin/master-data/matakuliah" />
        <x-template.menu.menu-item title="Module" url="admin/master-data/module" />
        <x-template.menu.menu-item title="Semester" url="admin/master-data/semester" />
        <x-template.menu.menu-item title="Kelas" url="admin/master-data/kelas" />
        <x-template.menu.menu-item title="Absensi" url="admin/absensi/absensi-data" />
    </nav>
</div>
<x-template.menu.menu-link title="Logout" url="logout" icon="sign-out-alt" />

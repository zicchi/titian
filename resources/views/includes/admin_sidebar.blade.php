<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin::dashboard')}}">Titian</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin::dashboard')}}">T</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{request()->is('admin/dashboard*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::dashboard')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{route('admin::dashboard')}}"><span>Kategori Produk</span></a></li>
                    <li class=""><a class="nav-link" href="{{route('admin::dashboard')}}"><span>Bahan</span></a></li>
                    <li class=""><a class="nav-link" href="{{route('admin::dashboard')}}"><span>Tag</span></a></li>
                    <li class=""><a class="nav-link" href="{{route('admin::dashboard')}}"><span>Kategori Blog</span></a></li>
                </ul>
            </li>
            <li class="{{request()->is('admin/product*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::product::index')}}"><i class="fas fa-fire"></i> <span>Produk</span></a></li>
            @if(auth()->user()->role == 'superadmin')
                <li class="{{request()->is('admin/users*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::users::index')}}"><i class="fas fa-user"></i> <span>User</span></a></li>
            @endif


        </ul>
    </aside>
</div>

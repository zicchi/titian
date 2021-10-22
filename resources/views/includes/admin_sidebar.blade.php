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
            <li class="nav-item dropdown {{request()->is('admin/data*') ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class="{{request()->is('admin/data/product-category*') ? 'dropdown active' : ''}}"><a class="nav-link" href="{{route('admin::product-category::index')}}"><span>Kategori Produk</span></a></li>
                    <li class="{{request()->is('admin/data/materials*') ? 'dropdown active' : ''}}"><a class="nav-link" href="{{route('admin::materials::index')}}"><span>Bahan</span></a></li>
                    <li class="{{request()->is('admin/data/tags*') ? 'dropdown active' : ''}}"><a class="nav-link" href="{{route('admin::tags::index')}}"><span>Tag</span></a></li>
                    <li class="{{request()->is('admin/data/blog-category*') ? 'dropdown active' : ''}}"><a class="nav-link" href="{{route('admin::blog-category::index')}}"><span>Kategori Blog</span></a></li>
                </ul>
            </li>
            <li class="{{request()->is('admin/products*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::product::index')}}"><i class="fas fa-chair"></i> <span>Produk</span></a></li>
            <li class="{{request()->is('admin/blogs*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::blogs::index')}}"><i class="fas fa-newspaper"></i> <span>Blog</span></a></li>
            @if(auth()->user()->role == 'superadmin')
                <li class="{{request()->is('admin/users*') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin::users::index')}}"><i class="fas fa-user"></i> <span>User</span></a></li>
            @endif


        </ul>
    </aside>
</div>

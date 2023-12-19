<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('home')}}">POS RENDYAMDANI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('home')}}">PA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>

            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-user"></i><span>User</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('user.index') }}">Data User</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-coffee"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('product.index') }}">Data Product</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>

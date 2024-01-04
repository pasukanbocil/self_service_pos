<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/dashboard">Self Service POS</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="/dashboard">POS</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Master Data</li>
        <li class="dropdown {{ Request::is('dashboard/*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Master Data</span></a>
            <ul class="dropdown-menu">
                <li class="{{ url()->current() == url('/dashboard/products') ? 'active' : '' }}">
                    <a href="/dashboard/products" class="nav-link">Product</a>
                </li>
                <li class="{{ url()->current() == url('/dashboard/categories') ? 'active' : '' }}">
                    <a href="/dashboard/categories" class="nav-link">Category</a>
                </li>
                <li class="{{ url()->current() == url('/dashboard/users') ? 'active' : '' }}">
                    <a href="/dashboard/users" class="nav-link">Users</a>
                </li>
            </ul>
        </li>
        <li class="menu-header">Order</li>
        <li class="dropdown {{ Request::is('shops/*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Shop</span></a>
            <ul class="dropdown-menu">
                <li class="{{ url()->current() == url('/shops/products') ? 'active' : '' }}">
                    <a href="/shops/products" class="nav-link">Products</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

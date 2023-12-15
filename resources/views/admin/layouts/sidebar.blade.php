<nav id="sidebar">
    <ul class="list-unstyled components">
        <li class="nav-item {{isActiveRoute('admin.home')}}">
            <a class="nav-link nav_link" href="{{route('admin.home')}}">
                <i class="me-1 fa-solid fa-chart-line"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item {{isActiveRoute('categories.index')}}">
            <a class="nav-link nav_link" href="{{route('categories.index')}}">
                <i class="me-1 fa-solid fa-list"></i>
                Categories
            </a>
        </li>
        <li class="nav-item {{isActiveRoute('products.index')}}">
            <a class="nav-link nav_link" href="{{route('products.index')}}">
                <i class="me-1 fa-solid fa-shirt"></i>
                Products
            </a>
        </li>
    </ul>
</nav>

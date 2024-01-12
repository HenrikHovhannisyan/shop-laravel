<nav id="sidebar">
    <ul class="list-unstyled components">
        <li class="nav-item {{isActiveRoute('admin.home')}}">
            <a class="nav-link nav_link" href="{{route('admin.home')}}">
                <i class="me-1 fa-solid fa-chart-line"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item {{isActiveRoute('users.index')}}">
            <a class="nav-link nav_link" href="{{route('users.index')}}">
                <i class="me-1 fa-solid fa-users"></i>
                Users
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
        <li class="nav-item {{isActiveRoute('contacts.index')}}">
            <a class="nav-link nav_link" href="{{route('contacts.index')}}">
                <i class="me-1 fa-solid fa-address-book"></i>
                Contact Us
            </a>
        </li>
        <li class="nav-item {{isActiveRoute('users.edit')}}">
            <a class="nav-link nav_link" href="{{route('users.edit',auth()->user()->id)}}">
                <i class="me-1 fa-solid fa-gear"></i>
                Seating
            </a>
        </li>
    </ul>
</nav>

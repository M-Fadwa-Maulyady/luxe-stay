<aside class="sidebar">
    <div class="menu-wrapper">

        <h2 class="sidebar-title">Admin Panel</h2>

        <ul class="menu-list">

            <!-- Dashboard -->
            <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Kategori -->
            <li class="menu-item {{ request()->is('kategori') ? 'active' : '' }}">
                <a href="/kategori">
                    <i class="fa fa-list"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <!-- Penginapan -->
            <li class="menu-item {{ request()->is('penginapan*') ? 'active' : '' }}">
                <a href="/penginapan">
                    <i class="fa fa-hotel"></i>
                    <span>Penginapan</span>
                </a>
            </li>

            <!-- Fasilitas -->
            <li class="menu-item {{ request()->is('fasilitas') ? 'active' : '' }}">
                <a href="/fasilitas">
                    <i class="fa fa-bed"></i>
                    <span>Fasilitas</span>
                </a>
            </li>

            <!-- Users -->
            <li class="menu-item {{ request()->is('users*') ? 'active' : '' }}">
                <a href="/users">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
            </li>

            <!-- Rating -->
            <li class="menu-item {{ request()->is('rating*') ? 'active' : '' }}">
                <a href="/rating">
                    <i class="fa fa-star"></i>
                    <span>Rating</span>
                </a>
            </li>

        </ul>

        <button class="logout-btn">Logout</button>

        <div class="logo-bottom">
            <h3>LUXE<br>STAY</h3>
        </div>

    </div>
</aside>

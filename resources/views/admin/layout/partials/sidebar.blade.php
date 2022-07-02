<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item  {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::is('dashboard/list-*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.list') }}" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>List Lowongan</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::is('dashboard/input-*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.mitra') }}" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Input Lowongan</span>
            </a>
        </li>
    </ul>
</div>

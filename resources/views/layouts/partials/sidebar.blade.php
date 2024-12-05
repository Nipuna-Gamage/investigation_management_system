<nav class="sidebar">
    <div class="logo">
        <img src="{{ asset('img/ministry-logo.png') }}" alt="Ministry Logo">
    </div>
    
    <div class="menu-section">
        <h3>MENU</h3>
        <ul>
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="{{ request()->is('my-cases*') ? 'active' : '' }}">
                <a href="{{ route('my-cases') }}"><i class="fas fa-folder"></i>My cases</a>
            </li>
            <li class="{{ request()->is('investigations/create') ? 'active' : '' }}">
                <a href="{{ route('investigations.create') }}"><i class="fas fa-plus"></i>Add investigations</a>
            </li>
            <li class="{{ request()->is('search-person*') ? 'active' : '' }}">
                <a href="{{ route('search-person') }}"><i class="fas fa-user"></i>Search person</a>
            </li>
            <li class="{{ request()->is('reports*') ? 'active' : '' }}">
                <a href="{{ route('reports') }}"><i class="fas fa-chart-bar"></i>Reports</a>
            </li>
        </ul>
    </div>

    <div class="menu-section">
        <h3>OTHERS</h3>
        <ul>
            <li class="has-submenu">
                <a href="#"><i class="fas fa-cog"></i>Settings</a>
                <ul class="submenu">
                    <li><a href="{{ route('settings.officers.create') }}"><i class="fas fa-user-plus"></i>Add Officers</a></li>
                    <li><a href="{{ route('settings.officers.edit') }}"><i class="fas fa-user-edit"></i>Edit Officers</a></li>
                    <li><a href="{{ route('settings.receiving-types') }}"><i class="fas fa-list-alt"></i>Receiving Types</a></li>
                    <li><a href="{{ route('settings.common-issues') }}"><i class="fas fa-exclamation-circle"></i>Common Issues</a></li>
                </ul>
            </li>
            <li><a href="{{ route('accounts') }}"><i class="fas fa-users"></i>Accounts</a></li>
            <li><a href="{{ route('help') }}"><i class="fas fa-question-circle"></i>Help</a></li>
        </ul>
    </div>
</nav>
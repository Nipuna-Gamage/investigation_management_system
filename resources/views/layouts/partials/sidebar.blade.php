<nav class="sidebar">
    <div class="logo">
        <img src="{{ asset('img/ministry-logo.png') }}" alt="Ministry Logo">
    </div>
    
    <div class="menu-section">
        <h3>MENU</h3>
        <ul>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="{{ request()->routeIs('cases.*') ? 'active' : '' }}">
                <a href="{{ route('cases.index') }}"><i class="fas fa-folder"></i>My cases</a>
            </li>
            <li class="{{ request()->routeIs('investigations.*') ? 'active' : '' }}">
                <a href="{{ route('investigations.create') }}"><i class="fas fa-plus"></i>Add investigations</a>
            </li>
            <li class="{{ request()->routeIs('person.search') ? 'active' : '' }}">
                <a href="{{ route('person.search') }}"><i class="fas fa-user"></i>Search person</a>
            </li>
            <li class="{{ request()->routeIs('reports') ? 'active' : '' }}">
                <a href="{{ route('reports') }}"><i class="fas fa-chart-bar"></i>Reports</a>
            </li>
        </ul>
    </div>

    <div class="menu-section">
        <h3>OTHERS</h3>
        <ul>
            <li class="has-submenu {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                <a href="#"><i class="fas fa-cog"></i>Settings</a>
                <ul class="submenu">
                    <li><a href="{{ route('settings.add-officers') }}"><i class="fas fa-user-plus"></i>Add Officers</a></li>
                    <li><a href="{{ route('settings.edit-officers') }}"><i class="fas fa-user-edit"></i>Edit Officers</a></li>
                    <li><a href="{{ route('settings.receiving-types') }}"><i class="fas fa-list-alt"></i>Receiving Types</a></li>
                    <li><a href="{{ route('settings.common-issues') }}"><i class="fas fa-exclamation-circle"></i>Common Issues</a></li>
                </ul>
            </li>
            <li class="{{ request()->routeIs('accounts') ? 'active' : '' }}">
                <a href="{{ route('accounts') }}"><i class="fas fa-users"></i>Accounts</a>
            </li>
            <li class="{{ request()->routeIs('help') ? 'active' : '' }}">
                <a href="{{ route('help') }}"><i class="fas fa-question-circle"></i>Help</a>
            </li>
        </ul>
    </div>
</nav>
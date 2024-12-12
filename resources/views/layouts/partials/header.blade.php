<header>
    <div class="header-title">
        <h1>State Ministry of Home Affairs</h1>
        <h2>Investigation Management Portal</h2>
    </div>
    <div class="user-profile">
        <div class="avatar-circle">
            <span class="avatar-letter">N</span>
        </div>
        <div class="user-info">
            <h3>Nipuna</h3>
            <span>Admin</span>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
            @csrf
            <button type="submit" class="btn-logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</header>
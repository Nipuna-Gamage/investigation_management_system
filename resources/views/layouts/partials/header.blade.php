<header>
    <div class="header-title">
        <h1>State Ministry of Home Affairs</h1>
        <h2>Investigation Management Portal</h2>
    </div>
    <div class="user-profile">
        <div class="avatar-circle">
            <span class="avatar-letter">{{ auth()->user()->name[0] }}</span>
        </div>
        <div class="user-info">
            <h3>{{ auth()->user()->name }}</h3>
            <span>{{ auth()->user()->role }}</span>
        </div>
    </div>
</header> 
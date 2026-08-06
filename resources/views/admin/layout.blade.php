<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli | Söke Yamaç Köyü</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="admin-layout">
        <aside class="admin-sidebar">
            <div class="admin-sidebar-logo">
                <span class="logo-main" style="color: var(--white);">Yamaç Köyü</span>
                <span class="logo-sub" style="color: var(--accent-gold-light); font-size: 0.65rem;">Yönetim Paneli</span>
            </div>

            <nav class="admin-sidebar-nav">
                <a href="{{ route('admin.dashboard') }}" class="admin-sidebar-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="9"></rect>
                        <rect x="14" y="3" width="7" height="5"></rect>
                        <rect x="14" y="12" width="7" height="9"></rect>
                        <rect x="3" y="16" width="7" height="5"></rect>
                    </svg>
                    <span>Görsel Yönetimi</span>
                </a>

                <a href="{{ route('admin.content') }}" class="admin-sidebar-link {{ Route::is('admin.content') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <span>İçerik Yönetimi</span>
                </a>
                
                <a href="{{ route('admin.messages') }}" class="admin-sidebar-link {{ Route::is('admin.messages') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <span>Gelen Mesajlar</span>
                </a>

                <a href="{{ route('admin.settings') }}" class="admin-sidebar-link {{ Route::is('admin.settings') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                    </svg>
                    <span>Ayarlar</span>
                </a>

                <a href="{{ route('home') }}" class="admin-sidebar-link">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span>Siteye Git</span>
                </a>
            </nav>

            <form action="{{ route('logout') }}" method="POST" style="margin-top: auto;">
                @csrf
                <button type="submit" class="admin-logout-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1-2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span>Çıkış Yap</span>
                </button>
            </form>
        </aside>

        <main class="admin-main">
            <header class="admin-header">
                <h1 class="admin-title">@yield('admin_title')</h1>
                <div class="admin-user-info">
                    Giriş yapan: <span>{{ Auth::user()->email }}</span>
                </div>
            </header>

            @yield('admin_content')
        </main>
    </div>
</body>
</html>

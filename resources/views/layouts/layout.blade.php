<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Söke Yamaç Köyü Gıda Tarım San ve Tic Ltd Şti - Doğal dağ esintisiyle kurutulan premium naturel dağ incirleri. Geleneksel tarım, eşsiz lezzet.">
    <title>@yield('title', 'Söke Yamaç Köyü | Naturel Dağ İnciri')</title>
    <link class="seo-link" rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar" id="navbar">
        <div class="navbar-container">
            <a href="{{ route('home') }}" class="navbar-logo" id="nav-logo-link">
                <span class="logo-main">Söke Yamaç Köyü</span>
                <span class="logo-sub">Gıda Tarım San. ve Tic.</span>
            </a>
            
            <nav class="navbar-links" id="navbar-links-menu">
                <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}" id="nav-home">Ana Sayfa</a>
                <a href="{{ route('products') }}" class="nav-link {{ Route::is('products') ? 'active' : '' }}" id="nav-products">Ürünler</a>
                <a href="{{ route('about') }}" class="nav-link {{ Route::is('about') ? 'active' : '' }}" id="nav-about">Hakkımızda</a>
                <a href="{{ route('contact') }}" class="nav-link {{ Route::is('contact') ? 'active' : '' }}" id="nav-contact">İletişim</a>
                <a href="{{ route('login') }}" class="nav-btn" id="nav-admin" style="font-size: 0.85rem; padding: 0.5rem 1rem;">Admin Paneli</a>
            </nav>

            <button class="mobile-menu-btn" id="mobile-toggle" aria-label="Menüyü Aç">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div>
                <div class="footer-logo">
                    <span class="logo-main">Söke Yamaç Köyü</span>
                    <span class="logo-sub">Gıda Tarım San. ve Tic.</span>
                </div>
                <p class="footer-desc">Ege dağlarının en saf incirlerini, Söke Yamaç Köyü'nün eşsiz doğasında geleneksel yöntemlerle yetiştiriyor ve sofralarınıza taşıyoruz.</p>
            </div>
            
            <div>
                <h4 class="footer-title">Hızlı Linkler</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}" class="footer-link" id="footer-link-home">Ana Sayfa</a></li>
                    <li><a href="{{ route('products') }}" class="footer-link" id="footer-link-products">Ürünler</a></li>
                    <li><a href="{{ route('about') }}" class="footer-link" id="footer-link-about">Hakkımızda</a></li>
                    <li><a href="{{ route('contact') }}" class="footer-link" id="footer-link-contact">İletişim</a></li>
                    <li><a href="{{ route('login') }}" class="footer-link" id="footer-link-admin" style="color: var(--accent-gold-light); font-weight: 600;">Admin Paneli</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">Ürünlerimiz</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}#naturel-incir" class="footer-link" id="footer-link-naturel">Naturel Dağ İnciri</a></li>
                    <li><a href="{{ route('home') }}#naturel-incir" class="footer-link" id="footer-link-geleneksel">Geleneksel Kurutma</a></li>
                    <li><a href="{{ route('home') }}#naturel-incir" class="footer-link" id="footer-link-organik">Yüksek Besin Değeri</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title">İletişim Bilgileri</h4>
                <div class="footer-contact-item">
                    <svg class="footer-contact-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span>Yamaç Köyü Söke / Aydın</span>
                </div>
                <div class="footer-contact-item">
                    <svg class="footer-contact-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <a href="tel:+905327172110" style="color: inherit; text-decoration: none;">+90 (532) 717 21 10</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Söke Yamaç Köyü Gıda Tarım San. ve Tic. Ltd. Şti. Tüm Hakları Saklıdır.</span>
            <span>Doğanın Mucizesi</span>
        </div>
    </footer>

    <script>
        const toggleBtn = document.getElementById('mobile-toggle');
        const menu = document.getElementById('navbar-links-menu');
        
        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('active');
        });

        const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.05,
            rootMargin: '0px 0px -20px 0px'
        });
        revealElements.forEach(el => observer.observe(el));
    </script>
</body>
</html>

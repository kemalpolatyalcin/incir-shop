@extends('layouts.layout')

@slot('title', 'İletişim | Söke Yamaç Köyü Gıda Tarım')

@section('content')
<section class="section">
    <div class="section-container">
        <div class="section-header animate-fade-up">
            <span class="section-subtitle">Bize Ulaşın</span>
            <h2 class="section-title">Detaylı Bilgi İçin İrtibat</h2>
        </div>
        
        <div class="contact-layout">
            <div class="contact-info reveal-left">
                <div class="contact-card">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <h4>Üretim ve Yönetim Adresi</h4>
                            <p>Yamaç Köyü, Söke / Aydın</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <h4>Telefon Hattı</h4>
                            <p><a href="tel:+905327172110" style="color: inherit; text-decoration: none;">+90 (532) 717 21 10</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-map-mockup" style="position: relative;">
                    <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=27.384597%2C37.772799%2C27.444597%2C37.812799&amp;layer=mapnik&amp;marker=37.792799%2C27.414597" allowfullscreen="" loading="lazy"></iframe>
                    <a href="https://www.google.com/maps/place/Yama%C3%A7,+S%C3%B6ke%2FAyd%C4%B1n/@37.792799,27.414597,14z/" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 12px; right: 12px; z-index: 10; background: var(--white); color: var(--accent-olive); padding: 8px 16px; border-radius: 8px; font-size: 0.85rem; font-weight: 600; text-decoration: none; box-shadow: var(--shadow-sm); border: 1px solid rgba(0,0,0,0.08); display: flex; align-items: center; gap: 6px; transition: var(--transition);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.transform='none'; this.style.boxShadow='var(--shadow-sm)';">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                        <span>Haritada Aç</span>
                    </a>
                </div>
            </div>
            
            <div class="contact-form-container reveal-right">
                <form action="#" method="POST" id="contact-form-el">
                    @csrf
                    <div class="form-group-row">
                        <div class="form-group">
                            <label for="first-name" class="form-label">Adınız</label>
                            <input type="text" id="first-name" name="first_name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name" class="form-label">Soyadınız</label>
                            <input type="text" id="last-name" name="last_name" class="form-input" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone-number" class="form-label">Telefon Numaranız</label>
                        <input type="tel" id="phone-number" name="phone_number" class="form-input" placeholder="05XX XXX XX XX" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message-txt" class="form-label">Mesajınız</label>
                        <textarea id="message-txt" name="message" class="form-textarea" placeholder="Sorularınızı ve mesajınızı buraya yazabilirsiniz..." required></textarea>
                    </div>
                    
                    <button type="submit" class="form-submit-btn" id="contact-submit">Mesaj Gönder</button>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="alert-overlay" id="success-overlay">
    <div class="alert-box">
        <div class="alert-icon-circle">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>
        <h3 class="alert-title">Mesajınız Alındı</h3>
        <p class="alert-desc">Mesajınız tarafımıza ulaşmıştır. En kısa sürede telefon numaranız üzerinden dönüş sağlanacaktır. Teşekkür ederiz.</p>
        <button class="alert-close-btn" id="success-close">Kapat</button>
    </div>
</div>

<script>
    const form = document.getElementById('contact-form-el');
    const overlay = document.getElementById('success-overlay');
    const closeBtn = document.getElementById('success-close');
    if (form && overlay && closeBtn) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            overlay.style.display = 'flex';
            setTimeout(() => {
                overlay.classList.add('show');
            }, 10);
            form.reset();
        });
        closeBtn.addEventListener('click', () => {
            overlay.classList.remove('show');
            setTimeout(() => {
                overlay.style.display = 'none';
            }, 300);
        });
    }
</script>
@endsection

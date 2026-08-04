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
                            <p>0532 7172110</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-map-mockup">
                    <iframe src="https://maps.google.com/maps?q=Yama%C3%A7%20K%C3%B6y%C3%BC%2C%20S%C3%B6ke%2FAyd%C4%B1n&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
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

@extends('layouts.layout')

@slot('title', 'Hakkımızda | Söke Yamaç Köyü Gıda Tarım')

@section('content')
<section class="section">
    <div class="section-container">
        <div class="about-intro">
            <div class="about-content animate-fade-left">
                <span class="section-subtitle animate-fade-left delay-1">Biz Kimiz?</span>
                <h2 class="animate-fade-left delay-2">{{ \App\Models\SiteContent::getValue('about_title', 'Söke Yamaç Köyü Gıda Tarım') }}</h2>
                <p class="animate-fade-left delay-3">{{ \App\Models\SiteContent::getValue('about_text_1') }}</p>
                <p class="animate-fade-left delay-3">{{ \App\Models\SiteContent::getValue('about_text_2') }}</p>
                
                <div class="stats-grid animate-fade-up delay-3">
                    <div class="stat-item">
                        <span class="stat-num">%100</span>
                        <span class="stat-label">Doğal Hasat</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">%0</span>
                        <span class="stat-label">Kimyasal Katkı</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">1. Sınıf</span>
                        <span class="stat-label">Premium Kalite</span>
                    </div>
                </div>
            </div>
            
            <div class="about-image-stack animate-fade-scale">
                <img src="{{ asset('images/11.jpg') }}" alt="Özenle Hazırlanan Defneli Kuru İncirler" class="about-img-1 animate-fade-scale">
                <img src="{{ asset('images/2.jpg') }}" alt="Dalında Yeşil İncirler" class="about-img-2 animate-fade-scale delay-1">
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-subtitle">Yıllık Döngü</span>
            <h2 class="section-title">Bahçemizin Hasat Takvimi</h2>
        </div>
        
        <div class="timeline-container">
            <div class="timeline-line"></div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content reveal-left">
                    <div class="timeline-date">Mayıs - Haziran</div>
                    <h3 class="timeline-title">İlk Uyanış ve Çiçeklenme</h3>
                    <p class="timeline-desc">Dağ yamaçlarımızdaki ağaçlar bahar yağmurlarının ardından uyanır. İncir meyveleri dallarda yavaşça belirmeye başlar. Dilek Yarımadası dağlarından gelen serin esintiler meyvelerin sağlıklı büyümesini destekler.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content reveal-right">
                    <div class="timeline-date">Temmuz</div>
                    <h3 class="timeline-title">Olgunlaşma ve Ballanma</h3>
                    <p class="timeline-desc">Ege güneşinin en sıcak günlerinde meyvelerimiz ballanır. İncirin içerisindeki şeker oranı zirveye ulaşır. Kabukları incelir ve meyveler kendi ağırlıklarıyla dallarda aşağıya doğru sarkar.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content reveal-left">
                    <div class="timeline-date">Ağustos</div>
                    <h3 class="timeline-title">Doğal Kuruma ve Dökülme</h3>
                    <p class="timeline-desc">Kuru poyraz esintisiyle incirler dalındayken suyunu çeker ve kuruyarak doğal bir şekilde ağaçların altına serilen koruyucu ağlara dökülür. Yapay hiçbir kurutma yöntemi kullanılmaz.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content reveal-right">
                    <div class="timeline-date">Eylül</div>
                    <h3 class="timeline-title">Özenli Tasnif ve Paketleme</h3>
                    <p class="timeline-desc">Ağ altlarından toplanan kuru incirlerimiz boyutlarına ve kalitelerine göre el işçiliğiyle ayrıştırılır. Geleneksel yöntemlerle yabani defne yaprakları eşliğinde kraft ambalajlara yerleştirilerek korunur.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-subtitle">Bahçemizden Kareler</span>
            <h2 class="section-title">Doğal Hasat Aşamalarımız</h2>
        </div>
        
        <div class="product-gallery">
            <div class="gallery-img-wrapper reveal-left">
                <img src="{{ asset('images/9.jpg') }}" alt="Dalında Hasat İncelemesi" class="gallery-img">
            </div>
            <div class="gallery-img-wrapper reveal-right">
                <img src="{{ asset('images/7.jpg') }}" alt="Taze Sarı Dağ İnciri" class="gallery-img focus-bottom">
            </div>
            <div class="gallery-img-wrapper reveal-left">
                <img src="{{ asset('images/8.jpg') }}" alt="Kraft Ambalajlı İncirler" class="gallery-img">
            </div>
            <div class="gallery-img-wrapper reveal-right">
                <img src="{{ asset('images/11.jpg') }}" alt="Yakın Çekim Ambalajlarımız" class="gallery-img">
            </div>
        </div>
    </div>
</section>
@endsection

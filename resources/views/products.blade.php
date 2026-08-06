@extends('layouts.layout')

@slot('title', 'Ürünlerimiz | Söke Yamaç Köyü Gıda Tarım')

@section('content')
<section class="section" style="padding-top: 6rem;">
    <div class="section-container">
        <div class="section-header animate-fade-up">
            <span class="section-subtitle">Premium Seçki</span>
            <h2 class="section-title">Seçkin Mahsullerimiz</h2>
            <p style="color: var(--text-secondary); margin-top: 1.5rem; font-size: 1.15rem; text-align: center; max-width: 600px; margin-left: auto; margin-right: auto;">Söke Yamaç Köyü'nün yüksek yamaçlarından toplanan, Ege güneşi ve nemsiz poyraz esintisiyle doğal yollarla olgunlaşıp kuruyan lezzetler.</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr; gap: 8rem; margin-top: 5rem;">
            
            <div class="product-detail-card" id="urun-1" style="align-items: flex-start;">
                <div class="product-detail-img-wrapper reveal-left" style="aspect-ratio: 4/3;">
                    <img src="{{ asset('images/5.jpg') }}" alt="Naturel Seçme Kuru İncir" class="product-detail-img" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-detail-info reveal-right">
                    <span class="product-detail-badge" style="background-color: rgba(36, 70, 52, 0.08); color: var(--accent-olive);">A Sınıfı Seçme</span>
                    <h3 style="font-size: 2.5rem; margin-bottom: 1.5rem;">{{ \App\Models\SiteContent::getValue('product_1_title', 'Naturel Seçme Kuru İncir') }}</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 2rem; color: var(--text-secondary);">{{ \App\Models\SiteContent::getValue('product_1_desc') }}</p>
                    
                    <div style="background-color: var(--bg-secondary); padding: 2rem; border-radius: 16px; border: 1px solid var(--glass-border);">
                        <h4 style="color: var(--accent-olive); margin-bottom: 1.25rem; font-size: 1.2rem;">Ürün Detayları</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.95rem;">
                            <div style="display: flex; flex-direction: column;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Kurutma Yöntemi</span>
                                <span style="color: var(--text-primary);">Güneşte Doğal Kurutma</span>
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Kimyasal / İlaç</span>
                                <span style="color: var(--text-primary);">%0 Katkı, Beyazlatıcı Yok</span>
                            </div>
                            <div style="display: flex; flex-direction: column; margin-top: 0.5rem;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Kalibre / Boyut</span>
                                <span style="color: var(--text-primary);">İri Seçme Boy</span>
                            </div>
                            <div style="display: flex; flex-direction: column; margin-top: 0.5rem;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Nem Oranı</span>
                                <span style="color: var(--text-primary);">Doğal Lokumsu Yumuşaklık</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-detail-card reverse" id="urun-2" style="align-items: flex-start;">
                <div class="product-detail-info reveal-left">
                    <span class="product-detail-badge" style="background-color: rgba(194, 142, 88, 0.12); color: var(--accent-gold-light);">Geleneksel & Aromatik</span>
                    <h3 style="font-size: 2.5rem; margin-bottom: 1.5rem;">{{ \App\Models\SiteContent::getValue('product_2_title', 'Defne Yapraklı Kuru İncir') }}</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 2rem; color: var(--text-secondary);">{{ \App\Models\SiteContent::getValue('product_2_desc') }}</p>
                    
                    <div style="background-color: var(--bg-secondary); padding: 2rem; border-radius: 16px; border: 1px solid var(--glass-border);">
                        <h4 style="color: var(--accent-olive); margin-bottom: 1.25rem; font-size: 1.2rem;">Ürün Detayları</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.95rem;">
                            <div style="display: flex; flex-direction: column;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Paketleme</span>
                                <span style="color: var(--text-primary);">Kraft Kutu / Sepet</span>
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Koruma Tipi</span>
                                <span style="color: var(--text-primary);">Doğal Yabani Defne Aroması</span>
                            </div>
                            <div style="display: flex; flex-direction: column; margin-top: 0.5rem;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Lezzet Profili</span>
                                <span style="color: var(--text-primary);">Hafif Baharatlı Tatlılık</span>
                            </div>
                            <div style="display: flex; flex-direction: column; margin-top: 0.5rem;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Böceklenme Koruması</span>
                                <span style="color: var(--text-primary);">Doğal Defne Yaprakları</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-img-wrapper reveal-right" style="aspect-ratio: 4/3;">
                    <img src="{{ asset('images/6.jpg') }}" alt="Defne Yapraklı Kuru İncir" class="product-detail-img" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>

            <div class="product-detail-card" id="urun-3" style="align-items: flex-start;">
                <div class="product-detail-img-wrapper reveal-left" style="aspect-ratio: 4/3;">
                    <img src="{{ asset('images/7.jpg') }}" alt="Taze Sarı Dağ İnciri" class="product-detail-img focus-bottom" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-detail-info reveal-right">
                    <span class="product-detail-badge" style="background-color: rgba(36, 70, 52, 0.08); color: var(--accent-olive);">Mevsimlik Taze Hasat</span>
                    <h3 style="font-size: 2.5rem; margin-bottom: 1.5rem;">{{ \App\Models\SiteContent::getValue('product_3_title', 'Taze Sarı Dağ İnciri') }}</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 2rem; color: var(--text-secondary);">{{ \App\Models\SiteContent::getValue('product_3_desc') }}</p>
                    
                    <div style="background-color: var(--bg-secondary); padding: 2rem; border-radius: 16px; border: 1px solid var(--glass-border);">
                        <h4 style="color: var(--accent-olive); margin-bottom: 1.25rem; font-size: 1.2rem;">Ürün Detayları</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.95rem;">
                            <div style="display: flex; flex-direction: column;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Hasat Dönemi</span>
                                <span style="color: var(--text-primary);">Ağustos - Eylül</span>
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Doku</span>
                                <span style="color: var(--text-primary);">Son Derece İnce Kabuk</span>
                            </div>
                            <div style="display: flex; flex-direction: column; margin-top: 0.5rem;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Şeker Dengesi</span>
                                <span style="color: var(--text-primary);">Hafif ve Ferahlatıcı Tat</span>
                            </div>
                            <div style="display: flex; flex-direction: column; margin-top: 0.5rem;">
                                <span style="font-weight: 600; color: var(--accent-gold);">Tüketim Önerisi</span>
                                <span style="color: var(--text-primary);">Kabuğu Soyulmadan Yenilebilir</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section section-alt" style="text-align: center; padding: 6rem 2rem;">
    <div class="section-container">
        <h3 class="font-serif" style="font-size: 2.25rem; color: var(--accent-olive); margin-bottom: 1.5rem;">Doğal Lezzeti Sofranıza Taşıyın</h3>
        <p style="color: var(--text-secondary); max-width: 600px; margin: 0 auto 2.5rem auto; font-size: 1.1rem;">Ürünlerimiz ve toptan/perakende sipariş koşulları hakkında detaylı bilgi almak için bizimle doğrudan iletişime geçebilirsiniz.</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="padding: 1.15rem 2.5rem; font-size: 1.05rem;">
            <span>Sipariş Bilgisi Alın</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
</section>
@endsection

@extends('admin.layout')

@section('admin_title', 'İçerik Yönetimi')

@section('admin_content')
    @if (session('success'))
        <div class="admin-success-alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="background-color: rgba(239, 68, 68, 0.1); color: #EF4444; padding: 1rem; border-radius: 12px; margin-bottom: 2rem; font-size: 0.9rem; border: 1px solid rgba(239, 68, 68, 0.2); font-weight: 500;">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="admin-card">
        <form action="{{ route('admin.content') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 3rem;">
                <h3 class="font-serif" style="color: var(--accent-olive); margin-bottom: 1.5rem; border-bottom: 2px solid rgba(36, 70, 52, 0.1); padding-bottom: 0.5rem;">Ana Sayfa & Hero Bölümü</h3>
                <div class="form-group">
                    <label for="hero_title" class="form-label">Hero Başlık</label>
                    <input type="text" id="hero_title" name="hero_title" class="form-input" value="{{ \App\Models\SiteContent::getValue('hero_title') }}" required>
                </div>
                <div class="form-group">
                    <label for="hero_description" class="form-label">Hero Açıklama Metni</label>
                    <textarea id="hero_description" name="hero_description" class="form-textarea" required>{{ \App\Models\SiteContent::getValue('hero_description') }}</textarea>
                </div>
            </div>

            <div style="margin-bottom: 3rem;">
                <h3 class="font-serif" style="color: var(--accent-olive); margin-bottom: 1.5rem; border-bottom: 2px solid rgba(36, 70, 52, 0.1); padding-bottom: 0.5rem;">Ürünlerimiz</h3>
                
                <div style="background: rgba(36, 70, 52, 0.02); padding: 2rem; border-radius: 16px; margin-bottom: 2rem; border: 1px solid var(--glass-border);">
                    <h4 style="color: var(--accent-olive); margin-bottom: 1rem;">1. Ürün (Seçme İncir)</h4>
                    <div class="form-group">
                        <label for="product_1_title" class="form-label">Ürün Başlığı</label>
                        <input type="text" id="product_1_title" name="product_1_title" class="form-input" value="{{ \App\Models\SiteContent::getValue('product_1_title') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="product_1_desc" class="form-label">Ürün Açıklaması</label>
                        <textarea id="product_1_desc" name="product_1_desc" class="form-textarea" required>{{ \App\Models\SiteContent::getValue('product_1_desc') }}</textarea>
                    </div>
                </div>

                <div style="background: rgba(36, 70, 52, 0.02); padding: 2rem; border-radius: 16px; margin-bottom: 2rem; border: 1px solid var(--glass-border);">
                    <h4 style="color: var(--accent-olive); margin-bottom: 1rem;">2. Ürün (Defneli İncir)</h4>
                    <div class="form-group">
                        <label for="product_2_title" class="form-label">Ürün Başlığı</label>
                        <input type="text" id="product_2_title" name="product_2_title" class="form-input" value="{{ \App\Models\SiteContent::getValue('product_2_title') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="product_2_desc" class="form-label">Ürün Açıklaması</label>
                        <textarea id="product_2_desc" name="product_2_desc" class="form-textarea" required>{{ \App\Models\SiteContent::getValue('product_2_desc') }}</textarea>
                    </div>
                </div>

                <div style="background: rgba(36, 70, 52, 0.02); padding: 2rem; border-radius: 16px; border: 1px solid var(--glass-border);">
                    <h4 style="color: var(--accent-olive); margin-bottom: 1rem;">3. Ürün (Taze İncir)</h4>
                    <div class="form-group">
                        <label for="product_3_title" class="form-label">Ürün Başlığı</label>
                        <input type="text" id="product_3_title" name="product_3_title" class="form-input" value="{{ \App\Models\SiteContent::getValue('product_3_title') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="product_3_desc" class="form-label">Ürün Açıklaması</label>
                        <textarea id="product_3_desc" name="product_3_desc" class="form-textarea" required>{{ \App\Models\SiteContent::getValue('product_3_desc') }}</textarea>
                    </div>
                </div>
            </div>

            <div style="margin-bottom: 3rem;">
                <h3 class="font-serif" style="color: var(--accent-olive); margin-bottom: 1.5rem; border-bottom: 2px solid rgba(36, 70, 52, 0.1); padding-bottom: 0.5rem;">Hakkımızda Bölümü</h3>
                <div class="form-group">
                    <label for="about_title" class="form-label">Hakkımızda Ana Başlık</label>
                    <input type="text" id="about_title" name="about_title" class="form-input" value="{{ \App\Models\SiteContent::getValue('about_title') }}" required>
                </div>
                <div class="form-group">
                    <label for="about_text_1" class="form-label">Hakkımızda Metni - Paragraf 1</label>
                    <textarea id="about_text_1" name="about_text_1" class="form-textarea" required>{{ \App\Models\SiteContent::getValue('about_text_1') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="about_text_2" class="form-label">Hakkımızda Metni - Paragraf 2</label>
                    <textarea id="about_text_2" name="about_text_2" class="form-textarea" required>{{ \App\Models\SiteContent::getValue('about_text_2') }}</textarea>
                </div>
            </div>

            <div style="margin-bottom: 3rem;">
                <h3 class="font-serif" style="color: var(--accent-olive); margin-bottom: 1.5rem; border-bottom: 2px solid rgba(36, 70, 52, 0.1); padding-bottom: 0.5rem;">İletişim & Konum Bilgileri</h3>
                <div class="form-group">
                    <label for="contact_address" class="form-label">Adres Bilgisi</label>
                    <input type="text" id="contact_address" name="contact_address" class="form-input" value="{{ \App\Models\SiteContent::getValue('contact_address') }}" required>
                </div>
                <div class="form-group">
                    <label for="contact_phone" class="form-label">Telefon Numarası</label>
                    <input type="text" id="contact_phone" name="contact_phone" class="form-input" value="{{ \App\Models\SiteContent::getValue('contact_phone') }}" required>
                </div>
                <div class="form-group">
                    <label for="contact_map_url" class="form-label">Google Harita iframe URL'si (src değeri)</label>
                    <textarea id="contact_map_url" name="contact_map_url" class="form-textarea" placeholder="https://maps.google.com/maps?q=..." required>{{ \App\Models\SiteContent::getValue('contact_map_url') }}</textarea>
                </div>
            </div>

            <button type="submit" class="admin-btn" style="padding: 1.15rem 2.5rem; font-size: 1.05rem; border-radius: 12px; width: 100%;">Tüm İçerik Değişikliklerini Kaydet</button>
        </form>
    </div>
@endsection

@extends('admin.layout')

@section('admin_title', 'Görsel Yönetimi')

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
        <h2 class="font-serif" style="color: var(--accent-olive); margin-bottom: 1.5rem;">Sitedeki Görselleri Değiştir</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2.5rem; font-size: 0.95rem;">Aşağıdaki alanlardan sitenin farklı bölümlerinde kullanılan görselleri yenileriyle değiştirebilirsiniz. Desteklenen formatlar: JPG, PNG. Maksimum boyut: 2MB.</p>

        <div class="admin-grid">
            <div class="admin-image-card">
                <span class="admin-image-title">2.jpg (Slider / Yeşil İncir)</span>
                <img src="{{ asset('images/2.jpg') }}" alt="Görsel 2" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="2">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">4.jpg (Slider / Hasat Sepeti)</span>
                <img src="{{ asset('images/4.jpg') }}" alt="Görsel 4" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="4">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">5.jpg (Ürün / Seçme İncir)</span>
                <img src="{{ asset('images/5.jpg') }}" alt="Görsel 5" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="5">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">6.jpg (Ürün & Hero / Defneli İncir)</span>
                <img src="{{ asset('images/6.jpg') }}" alt="Görsel 6" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="6">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">7.jpg (Ürün / Taze İncir)</span>
                <img src="{{ asset('images/7.jpg') }}" alt="Görsel 7" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="7">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">8.jpg (Slider / Manzara)</span>
                <img src="{{ asset('images/8.jpg') }}" alt="Görsel 8" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="8">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">9.jpg (Slider & Galeri / Ağaçta Hasat)</span>
                <img src="{{ asset('images/9.jpg') }}" alt="Görsel 9" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="9">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">10.jpg (Slider / Ballanan İncir)</span>
                <img src="{{ asset('images/10.jpg') }}" alt="Görsel 10" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="10">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">11.jpg (Slider & Galeri / Ambalaj)</span>
                <img src="{{ asset('images/11.jpg') }}" alt="Görsel 11" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="11">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>
        </div>
    </div>
@endsection

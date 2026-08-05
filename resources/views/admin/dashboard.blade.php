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
                <span class="admin-image-title">{{ $photos[2]->title ?? 'Yeşil İncir' }} (2.jpg)</span>
                <img src="{{ asset($photos[2]->path ?? 'images/2.jpg') }}?v={{ $photos[2]->updated_at->timestamp ?? time() }}" alt="Görsel 2" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="2">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[4]->title ?? 'Hasat Sepeti' }} (4.jpg)</span>
                <img src="{{ asset($photos[4]->path ?? 'images/4.jpg') }}?v={{ $photos[4]->updated_at->timestamp ?? time() }}" alt="Görsel 4" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="4">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[5]->title ?? 'Seçme İncir' }} (5.jpg)</span>
                <img src="{{ asset($photos[5]->path ?? 'images/5.jpg') }}?v={{ $photos[5]->updated_at->timestamp ?? time() }}" alt="Görsel 5" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="5">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[6]->title ?? 'Defneli İncir' }} (6.jpg)</span>
                <img src="{{ asset($photos[6]->path ?? 'images/6.jpg') }}?v={{ $photos[6]->updated_at->timestamp ?? time() }}" alt="Görsel 6" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="6">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[7]->title ?? 'Taze İncir' }} (7.jpg)</span>
                <img src="{{ asset($photos[7]->path ?? 'images/7.jpg') }}?v={{ $photos[7]->updated_at->timestamp ?? time() }}" alt="Görsel 7" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="7">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[8]->title ?? 'Manzara' }} (8.jpg)</span>
                <img src="{{ asset($photos[8]->path ?? 'images/8.jpg') }}?v={{ $photos[8]->updated_at->timestamp ?? time() }}" alt="Görsel 8" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="8">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[9]->title ?? 'Ağaçta Hasat' }} (9.jpg)</span>
                <img src="{{ asset($photos[9]->path ?? 'images/9.jpg') }}?v={{ $photos[9]->updated_at->timestamp ?? time() }}" alt="Görsel 9" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="9">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[10]->title ?? 'Ballanan İncir' }} (10.jpg)</span>
                <img src="{{ asset($photos[10]->path ?? 'images/10.jpg') }}?v={{ $photos[10]->updated_at->timestamp ?? time() }}" alt="Görsel 10" class="admin-image-preview">
                <form action="{{ route('admin.upload_image') }}" method="POST" class="admin-upload-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="img_id" value="10">
                    <input type="file" name="image" class="admin-file-input" required>
                    <button type="submit" class="admin-btn">Görseli Güncelle</button>
                </form>
            </div>

            <div class="admin-image-card">
                <span class="admin-image-title">{{ $photos[11]->title ?? 'Ambalaj' }} (11.jpg)</span>
                <img src="{{ asset($photos[11]->path ?? 'images/11.jpg') }}?v={{ $photos[11]->updated_at->timestamp ?? time() }}" alt="Görsel 11" class="admin-image-preview">
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

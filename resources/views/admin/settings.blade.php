@extends('admin.layout')

@section('admin_title', 'Ayarlar')

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
        <h2 class="font-serif" style="color: var(--accent-olive); margin-bottom: 1.5rem;">Giriş Bilgilerini Güncelle</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2.5rem; font-size: 0.95rem;">Yönetici paneline giriş yaparken kullandığınız e-posta adresini ve şifreyi buradan güncelleyebilirsiniz. Şifrenizi değiştirmek istemiyorsanız şifre alanlarını boş bırakabilirsiniz.</p>

        <form action="{{ route('admin.settings') }}" method="POST" style="max-width: 500px;">
            @csrf
            
            <div class="form-group">
                <label for="email" class="form-label">E-Posta Adresi</label>
                <input type="email" id="email" name="email" class="form-input" value="{{ Auth::user()->email }}" required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Yeni Şifre (İsteğe Bağlı)</label>
                <input type="password" id="password" name="password" class="form-input" placeholder="Boş bırakırsanız mevcut şifreniz korunur">
            </div>

            <div class="form-group" style="margin-bottom: 2.5rem;">
                <label for="password_confirmation" class="form-label">Yeni Şifre Tekrar</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" placeholder="Şifrenizi tekrar yazın">
            </div>

            <button type="submit" class="admin-btn" style="padding: 1rem 2rem;">Ayarları Kaydet</button>
        </form>
    </div>
@endsection

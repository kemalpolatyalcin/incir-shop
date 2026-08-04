<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Söke Yamaç Köyü</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background: radial-gradient(circle at 80% 20%, rgba(223, 172, 115, 0.15) 0%, transparent 50%), radial-gradient(circle at 10% 80%, rgba(50, 95, 71, 0.08) 0%, transparent 60%); padding: 2rem;">
    <div style="background: var(--glass-bg); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid var(--glass-border); padding: 3rem; border-radius: 24px; box-shadow: var(--shadow-lg); width: 100%; max-width: 440px;">
        <div style="text-align: center; margin-bottom: 2.5rem;">
            <h2 class="font-serif" style="color: var(--accent-olive); font-size: 2.25rem; margin-bottom: 0.5rem;">Yönetici Girişi</h2>
            <p style="color: var(--text-secondary); font-size: 0.95rem;">Söke Yamaç Köyü Gıda Tarım Yönetim Portalı</p>
        </div>

        @if ($errors->any())
            <div style="background-color: rgba(239, 68, 68, 0.1); color: #EF4444; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; font-size: 0.9rem; border: 1px solid rgba(239, 68, 68, 0.2); font-weight: 500;">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">E-Posta Adresi</label>
                <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group" style="margin-bottom: 2.5rem;">
                <label for="password" class="form-label">Şifre</label>
                <input type="password" id="password" name="password" class="form-input" required>
            </div>

            <button type="submit" class="form-submit-btn">Giriş Yap</button>
        </form>
    </div>
</body>
</html>

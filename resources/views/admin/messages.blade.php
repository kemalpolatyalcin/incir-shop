@extends('admin.layout')

@section('admin_title', 'Gelen Mesajlar')

@section('admin_content')
    @if (session('success'))
        <div class="admin-alert success" style="margin-bottom: 2rem;">
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="admin-card">
        <h2 class="font-serif" style="color: var(--accent-olive); margin-bottom: 0.5rem;">Müşteri İletişim Mesajları</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2.5rem; font-size: 0.95rem;">Ziyaretçileriniz tarafından iletişim formu doldurularak gönderilen tüm mesajlar aşağıda tarih sırasına göre listelenmektedir.</p>

        @if ($messages->isEmpty())
            <div style="text-align: center; padding: 4rem 2rem; color: var(--text-secondary); border: 1px dashed var(--glass-border); border-radius: 16px;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="margin-bottom: 1rem; opacity: 0.5; color: var(--accent-olive);">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <p style="font-size: 1.1rem; font-weight: 500;">Henüz kayıtlı mesaj bulunmuyor.</p>
            </div>
        @else
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; min-width: 800px; font-size: 0.95rem; text-align: left;">
                    <thead>
                        <tr style="border-bottom: 2px solid var(--glass-border); color: var(--accent-olive); font-weight: 600;">
                            <th style="padding: 1rem;">Gönderen</th>
                            <th style="padding: 1rem;">Telefon</th>
                            <th style="padding: 1rem;">Mesaj</th>
                            <th style="padding: 1rem; width: 150px;">Tarih</th>
                            <th style="padding: 1rem; width: 100px; text-align: right;">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $msg)
                            <tr style="border-bottom: 1px solid var(--glass-border); transition: background-color 0.2s ease;">
                                <td style="padding: 1.25rem 1rem; font-weight: 600; color: var(--text-primary);">{{ $msg->name }}</td>
                                <td style="padding: 1.25rem 1rem; font-weight: 500; color: var(--text-primary);">{{ $msg->phone }}</td>
                                <td style="padding: 1.25rem 1rem; color: var(--text-secondary); max-width: 300px; word-wrap: break-word;">{{ $msg->message }}</td>
                                <td style="padding: 1.25rem 1rem; color: var(--text-secondary); font-size: 0.85rem;">{{ $msg->created_at->format('d.m.Y H:i') }}</td>
                                <td style="padding: 1.25rem 1rem; text-align: right;">
                                    <form action="{{ route('admin.delete_message', $msg->id) }}" method="POST" onsubmit="return confirm('Bu mesajı silmek istediğinize emin misiniz?');" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; padding: 0.5rem; color: #ff5252; cursor: pointer; transition: color 0.2s;" title="Mesajı Sil">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection

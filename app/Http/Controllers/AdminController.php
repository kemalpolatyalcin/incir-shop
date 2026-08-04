<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Giriş bilgileri hatalı.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'img_id' => ['required', 'integer', 'between:2,11'],
        ]);

        $imgId = $request->input('img_id');
        $file = $request->file('image');
        $fileName = $imgId . '.jpg';
        $destinationPath = public_path('images');

        $imageContent = file_get_contents($file->getRealPath());
        $im = @imagecreatefromstring($imageContent);
        if ($im === false) {
            return back()->withErrors(['image' => 'Geçersiz resim dosyası.']);
        }
        
        $newFilePath = $destinationPath . DIRECTORY_SEPARATOR . $fileName;
        
        imagejpeg($im, $newFilePath, 90);
        imagedestroy($im);

        return back()->with('success', 'Görsel ' . $imgId . '.jpg başarıyla güncellendi ve optimize edildi.');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function updateSettings(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'min:6', 'confirmed'],
        ]);

        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return back()->with('success', 'Ayarlar başarıyla güncellendi.');
    }
}

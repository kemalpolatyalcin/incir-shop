<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FigController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeMessage(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\Message::create([
            'name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'phone' => $validated['phone_number'],
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Mesajınız başarıyla gönderildi. Teşekkür ederiz.');
    }
}

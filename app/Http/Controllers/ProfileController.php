<?php

namespace App\Http\Controllers;

use App\Models\UserSettings;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function settings()
    {
        $settings = UserSettings::getSettings(auth()->id());
        return view('profile.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $validated = $request->validate([
            'theme' => 'required|in:light,dark',
            'notifications' => 'required|in:all,important,none'
        ]);

        $settings = UserSettings::updateSettings(auth()->id(), $validated);
        
        return response()->json([
            'success' => true,
            'message' => 'Настройки сохранены',
            'settings' => $settings
        ]);
    }

    public function updateAddress(Request $request)
    {
        $request->validate([
            'address' => 'required|string|min:6'
        ]);

        $address = $this->formatAddress($request->address);
        UserSettings::updateAddress(auth()->id(), $address);
        
        return response()->json([
            'success' => true,
            'message' => 'Адрес сохранён',
            'address' => $address
        ]);
    }

    private function formatAddress($address)
    {
        $parts = collect(explode(',', $address))
            ->map(fn($part) => trim($part))
            ->filter()
            ->map(fn($part) => 
                collect(explode(' ', $part))
                    ->map(fn($word) => ucfirst(mb_strtolower($word)))
                    ->join(' ')
            );
            
        return $parts->join(', ');
    }
}
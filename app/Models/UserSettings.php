<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'theme',
        'notifications',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getSettings($userId)
    {
        return self::firstOrCreate(
            ['user_id' => $userId],
            ['theme' => 'light', 'notifications' => 'all', 'address' => null]
        );
    }

    public static function updateSettings($userId, $data)
    {
        $settings = self::getSettings($userId);
        $settings->update($data);
        return $settings;
    }

    public static function updateAddress($userId, $address)
    {
        return self::updateSettings($userId, ['address' => $address]);
    }
}
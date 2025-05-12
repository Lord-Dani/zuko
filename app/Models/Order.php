<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'total_amount',
        'status',
        'delivery_method',
        'delivery_method_text',
        'items'
    ];

    protected $casts = [
        'items' => 'array',
        'created_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getOrderHistory($userId)
    {
        return self::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($order) {
                return [
                    'id' => $order->id,
                    'date' => $order->created_at->toLocaleString(),
                    'items' => $order->items,
                    'total' => $order->total_amount,
                    'status' => $order->status,
                    'deliveryMethodText' => $order->delivery_method_text
                ];
            });
    }

    public static function clearHistory($userId)
    {
        return self::where('user_id', $userId)->delete();
    }
}
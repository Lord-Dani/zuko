<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'items',
        'total'
    ];

    protected $casts = [
        'items' => 'array',
        'total' => 'float'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getCart($userId)
    {
        return self::firstOrCreate(
            ['user_id' => $userId],
            ['items' => [], 'total' => 0]
        );
    }

    public static function addItem($userId, $item)
    {
        $cart = self::getCart($userId);
        $items = $cart->items ?? [];
        $items[] = $item;
        
        $cart->update([
            'items' => $items,
            'total' => $cart->total + $item['price']
        ]);
        
        return $cart;
    }

    public static function removeItem($userId, $index)
    {
        $cart = self::getCart($userId);
        $items = $cart->items;
        
        if (isset($items[$index])) {
            $removedItem = $items[$index];
            unset($items[$index]);
            $items = array_values($items);
            
            $cart->update([
                'items' => $items,
                'total' => $cart->total - $removedItem['price']
            ]);
        }
        
        return $cart;
    }

    public static function clearCart($userId)
    {
        $cart = self::getCart($userId);
        $cart->update(['items' => [], 'total' => 0]);
        return $cart;
    }
}

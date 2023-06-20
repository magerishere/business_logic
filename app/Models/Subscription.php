<?php

namespace App\Models;

use App\Enums\SubscriptionMarket;
use App\Enums\SubscriptionStatus;
use App\Enums\SubscriptionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'type',
        'market',
        'status',
        'price',
        'expire_at',
    ];

    protected $casts = [
        'type' => SubscriptionType::class,
        'market' => SubscriptionMarket::class,
        'status' => SubscriptionStatus::class,
        'price' => 'float',
        'expire_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class App extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'platform_id',
        'name',
    ];

    protected $casts = [
        'id' => 'string',
        'platform_id' => Platforms::class,
        'name' => 'string',
    ];

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }
}

<?php

namespace App\Models;

use App\Enums\Platforms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'id'
    ];

    protected $casts = [
        'id' => Platforms::class,
    ];

    public function apps(): HasMany
    {
        return $this->hasMany(App::class);
    }
}

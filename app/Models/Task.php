<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'id_label',
        'deadline',
        'priority',
        'id_user',
        'status',
        'del'
    ];

    public function label(): BelongsTo
    {
        return $this->belongsTo(Label::class, 'id_label');
    }
}

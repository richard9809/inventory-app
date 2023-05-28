<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DispensaryDrug extends Model
{
    use HasFactory;

    protected $fillable = [
        'dispensary_id',
        'drug_id',
        'quantity'
    ];

    public function dispensary(): BelongsTo
    {
        return $this->belongsTo(Dispensary::class);
    }

    public function drug(): BelongsTo
    {
        return $this->belongsTo(Drug::class);
    }
}

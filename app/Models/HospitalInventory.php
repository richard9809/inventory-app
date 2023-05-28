<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalInventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospital_id',
        'drug_id',
        'quantity',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function drug()
    {
        return $this->belongsTo(Drug::class);
    }
}

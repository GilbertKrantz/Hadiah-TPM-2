<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'NIM',
        'GPA',
        'image',
        'major_id'
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}

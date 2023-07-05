<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macau3D extends Model
{
    use HasFactory;

    protected $table = 'macau3d';

    protected $fillable = [
        'user_id',
        'angka',
        'jumlah',
        'status',
    ];

    /**
     * Get the user that owns the Macau4D.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'bank',
        'noRek',
        'transaksi',
        'nominal',
        'handler',
        'status',
    ];

    /**
     * Get the user that owns the withdrawal.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

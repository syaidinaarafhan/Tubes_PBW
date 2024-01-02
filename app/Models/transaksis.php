<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksis extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kamp_id',
        'price',
        'username',
        'no_hp',
        'pesan',
    ];

    public function kampanye()
    {
        return $this->belongsTo(GalangDanaModel::class, 'kamp_id');
    }
}

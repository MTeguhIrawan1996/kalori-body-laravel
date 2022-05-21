<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pembayaran extends Model
{
    use SoftDeletes;
    protected $table = "pembayaran";

    protected $fillable = [
        'id',
        'user_id',
        'status_pembayaran', 
        'total_bayar', 
        'tgl_bayar',    
    ];

    protected $hidden = [
        
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id')->withTrashed();
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }

    // public function pembayaran()
    // {
    //     return $this->hasOne(Pembayaran::class, 'id');
    // }
}
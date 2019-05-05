<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orderlog extends Model
{
    protected $fillable = [
        'comment', 'adminComment', 'state', 'username'
    ];

    //1-M Beziehung Bestellung-Kommentar
    public function order():BelongsTo{
        return $this->belongsTo(Order::class);
    }
}

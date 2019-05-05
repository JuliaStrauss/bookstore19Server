<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'netAmount', 'state', 'user_id'
    ];

    //N-M Beziehung Buch-Bestellung
    public function books() : BelongsToMany {
        return $this->belongsToMany(Book::class)->withPivot('PreisBeiBestellung', 'Menge', 'Titel')->withTimestamps();
    }

    //1-M Beziehung Bestellung-Kommentar
    public function orderlogs(): HasMany{
        return $this->hasMany(Orderlog::class);
    }

    //1-M Beziehung User-Bestellung
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

}

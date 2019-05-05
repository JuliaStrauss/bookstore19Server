<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Image;
use App\User;

class Book extends Model
{
    // alle beschreibbaren properties
    protected $fillable = [
        'isbn', 'title', 'subtitle', 'published',
        'rating', 'description', 'netAmount', 'user_id', 'amount'
    ];

    //
    public function isFavourite() : bool {
          return $this->rating > 5;
    }

    //1-M Beziehung Buch-Images
    public function images() : HasMany {
        return $this->hasMany(Image::class);
    }

    //1-M Beziehung User-Buch
    public function user() : BelongsTo  {
        return $this->belongsTo(User::class);
    }

    //N-M Beziehung Autor-Buch
    public function authors() : BelongsToMany {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

    //N-M Beziehung Buch-Bestellung
    public function orders() : BelongsToMany {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
}

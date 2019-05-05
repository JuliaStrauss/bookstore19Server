<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    protected $fillable = [
      'url', 'title', 'book_id'
    ];

    //1-M Beziehung Buch-Images
    public function book() : BelongsTo {
        return $this->belongsTo(Book::class);
    }
}

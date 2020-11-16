<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpotifyRestriction extends Model
{
    use HasFactory;

    // the table name explicitly defined.
    protected $table = 'spotify_restrictions';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'spotify',
        'country'
    ];

    // relationships to come here...

}

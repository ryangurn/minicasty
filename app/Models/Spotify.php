<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spotify extends Model
{
    use HasFactory;

    // the table name explicitly defined.
    protected $table = 'spotify';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'guid',
        'order',
        'start',
        'end',
        'keywords'
    ];

    // relationships to come here...
    public function countries()
    {
        return $this->hasMany(SpotifyRestriction::class, 'spotify', 'guid');
    }
}

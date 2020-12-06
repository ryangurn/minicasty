<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Episode extends Model
{
    use HasFactory;

    // the table name explicitly defined.
    protected $table = 'episodes';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    protected $dates = ['created_at', 'updated_at', 'publishing_date'];

    // which elements can be filled by mass assignment
    protected $fillable = [
        'title',
        'author',
        'audio',
        'publishing_date',
        'description',
        'image',
        'explicit'
    ];

    // relationships to come here...

    /**
     * builds queries for asset relationship
     * @return HasOne
     */
    public function file()
    {
        return $this->hasOne(Asset::class, 'guid', 'audio');
    }

    /**
     * builds queries for itunes info relationship
     * @return HasOne
     */
    public function itunes()
    {
        return $this->hasOne(iTunes::class, 'guid', 'guid');
    }

    /**
     * builds queries for spotify info relationship
     * @return HasOne
     */
    public function spotify()
    {
        return $this->hasOne(Spotify::class, 'guid', 'guid');
    }
}

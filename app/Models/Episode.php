<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    // the table name explicitly defined.
    protected $table = 'episodes';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

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
    public function file()
    {
        return $this->hasOne(Asset::class, 'guid', 'audio');
    }
}

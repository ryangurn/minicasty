<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iTunes extends Model
{
    use HasFactory;


    // the table name explicitly defined.
    protected $table = 'itunes';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'guid',
        'title',
        'episode_number',
        'season_number',
        'type',
        'block'
    ];

    // relationships to come here...

}

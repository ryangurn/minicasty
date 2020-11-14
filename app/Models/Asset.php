<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    // the table name explicitly defined
    protected $table = 'assets';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'guid',
        'image',
        'audio',
        'path',
        'accessible'
    ];

    // cast columns to types
    protected $casts = [
        'accessible' => 'boolean'
    ];
}

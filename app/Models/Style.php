<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;


    // the table name explicitly defined
    protected $table = 'styles';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'name',
        'class',
        'usable'
    ];

    // cast columns to data types
    protected $casts = [
        'usable' => 'array',
    ];
}

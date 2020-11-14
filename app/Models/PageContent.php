<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;


    // the table name explicitly defined
    protected $table = 'page_contents';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'page',
        'header',
        'subtitle',
        'content'
    ];

    // cast columns to data types
    protected $casts = [
        'content' => 'json',
    ];
}

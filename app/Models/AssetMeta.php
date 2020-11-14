<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetMeta extends Model
{
    use HasFactory;

    // the table name explicitly defined
    protected $table = 'asset_meta';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'guid',
        'key',
        'value'
    ];

}

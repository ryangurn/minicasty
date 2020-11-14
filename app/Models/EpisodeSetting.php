<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeSetting extends Model
{
    use HasFactory;

    // the table name explicitly defined
    protected $table = 'episode_settings';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'setting',
        'episode',
    ];
}

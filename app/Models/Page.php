<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    // the table name explicitly defined
    protected $table = 'pages';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'episode',
        'slug',
        'title',
        'display_podcast',
        'display_episode'
    ];

    // cast columns to data types
    protected $casts = [
        'display_podcast' => 'bool',
        'display_episode' => 'bool'
    ];

    public function getEpisode()
    {
        return $this->hasOne(Episode::class, 'guid', 'episode');
    }
}

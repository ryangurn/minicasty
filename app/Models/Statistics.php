<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    // the table name explicitly defined.
    protected $table = 'statistics';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'episode',
        'page',
        'count',
    ];

    public function getPage()
    {
        return $this->hasOne(Page::class);
    }

    public function getEpisode()
    {
        return $this->hasOne(Episode::class);
    }
}

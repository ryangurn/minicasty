<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static firstOrCreate(array $array)
 */
class Category extends Model
{
    use HasFactory;


    // the table name explicitly defined
    protected $table = 'categories';
    // declare the primary key
    protected $primaryKey = 'guid';
    // declare the primary key type
    protected $keyType = 'string';

    // which elements can be filled by mass assignment
    protected $fillable = [
        'parent',
        'programming',
        'name'
    ];

    public function p()
    {
        return $this->hasOne(Category::class, 'parent', 'guid');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $date
 * @property mixed $location
 * @property mixed $location2
 * @property mixed $text
 * @property mixed $category_id
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Blog extends Model
{
    use HasFactory;
    protected $table = "Blog";

    protected $fillable = [
        'name',
        'date',
        'location',
        'location2',
        'text',
        'category_id',
    ];
}

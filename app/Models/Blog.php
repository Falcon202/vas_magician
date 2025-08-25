<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $date
* // * @property mixed $location
 * @property mixed $location2
 * @property mixed $text
 * @property mixed $category_id
 * @property mixed $city_id
 * @property mixed $is_disabled
 * @property mixed $created_at
 * @property mixed $updated_at
 * @method static create(array $array)
 * @method static where(string $string, mixed $id)
 */
class Blog extends Model
{
    use HasFactory;
    protected $table = "Blog";

    protected $fillable = [
        'name',
        'date',
//        'location',
        'location2',
        'text',
        'category_id',
        'city_id',
        'is_disabled'
    ];
}

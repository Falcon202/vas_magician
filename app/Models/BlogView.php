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
 * @property mixed $category_name
 * @property mixed $is_disabled
 * @method static where(string $string, $id)
 */
class BlogView extends Model
{
    use HasFactory;
    protected $table = "BlogView";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $original_name
 * @property mixed $data
 * @property mixed $is_main_photo
 * @property mixed $blog_id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @method static where(string $string, $id)
 */
class BlogPhoto extends Model
{
    use HasFactory;
    protected $table = "BlogPhoto";

    protected $fillable = [
        'name',
        'original_name',
        'data',
        'is_main_photo',
        'blog_id',
    ];
}

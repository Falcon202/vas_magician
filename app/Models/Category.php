<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $created_at
 * @property mixed $updated_at
 * @method static where(string $string, $id)
 */
class Category extends Model
{
    use HasFactory;
    protected $table = "Category";

    protected $fillable = [
        'name',
    ];
}

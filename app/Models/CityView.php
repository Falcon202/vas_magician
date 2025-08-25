<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $blog_count
 */
class CityView extends Model
{
    use HasFactory;
    protected $table = "CityView";
}

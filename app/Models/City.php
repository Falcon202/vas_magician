<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class City extends Model
{
    use HasFactory;
    protected $table = "City";

    protected $fillable = [
        'name',
    ];
}

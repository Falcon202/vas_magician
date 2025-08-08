<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 * @property mixed $instagram_id
 * @property mixed $caption
 * @property mixed $media_url
 * @property mixed $media_type
 * @property mixed $posted_at
 * @property mixed $permalink
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class InstagramPost extends Model
{
    use HasFactory;
    protected $table = "Category";

    protected $fillable = [
        'instagram_id',
        'caption',
        'media_url',
        'media_type',
        'posted_at',
        'permalink',
    ];
}

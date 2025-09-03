<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'uuid',
        'title',
        'body',
    ];

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
        ];
    }
}

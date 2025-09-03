<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Post;
use Str;

final class PostObserver
{
    public function creating(Post $post): void
    {
        $post->uuid = (string) Str::uuid();
    }
}

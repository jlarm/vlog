<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class PostRequest extends FormRequest
{
    /**
     * @return array<string, array<string>>
     */
    public function rules(): array
    {
        return [
            'uuid' => ['required'],
            'title' => ['required'],
            'body' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

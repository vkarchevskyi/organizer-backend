<?php

declare(strict_types=1);

namespace App\Http\Requests\TodoTask;

use Illuminate\Foundation\Http\FormRequest;

class StoreTodoTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'content' => ['required', 'max:512'],
            'list_id' => ['required', 'integer', 'exists:todo_lists,id'],
        ];
    }
}

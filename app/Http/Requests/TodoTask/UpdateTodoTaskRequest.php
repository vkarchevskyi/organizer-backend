<?php

declare(strict_types=1);

namespace App\Http\Requests\TodoTask;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTodoTaskRequest extends FormRequest
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
            'content' => ['max:512'],
            'list_id' => ['integer', 'exists:todo_lists,id'],
        ];
    }
}

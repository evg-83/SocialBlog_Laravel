<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Определите, разрешается ли пользователь выполнять этот запрос.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Получите правила проверки, которые применяются к запросу.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
        ];
    }
}

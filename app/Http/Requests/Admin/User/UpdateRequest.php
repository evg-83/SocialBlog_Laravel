<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        // dd($this->email);
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Имя должно быть строкой',
            'email.required' => 'Это поле необходимо для заполнения|string|email|unique:users',
            'email.string' => 'Почта должна быть строкой|email|unique:users',
            'email.email' => 'Ваша почта должна соответствовать формату mail@some.domain|unique:users',
            'email.unique' => 'Пользователь с таким email уже существует',
        ];
    }
}

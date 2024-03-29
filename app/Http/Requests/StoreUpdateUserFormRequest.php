<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->user ?? '';

        $rules =  [
            'name' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],
            'email' => [
                'required',
                'email',
                "unique:users,email,{$id},id",
            ],
            'password' => [
                'required',
                'min:6',
                'max:15',
            ]
        ];

        if ($this->method('PUT')) {
            $rules['password'] = [
                'nullable',
                'min:6',
                'max:15',
            ];
        }

        return $rules;
    }
}

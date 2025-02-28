<?php

namespace App\Http\Requests\Api\Restaurant;

use Illuminate\Foundation\Http\FormRequest;

class CreateMealRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'ready_time' => 'required|integer',
            'image' => 'required|image|mimes:png,jpg,jpeg'

        ];
    }
}

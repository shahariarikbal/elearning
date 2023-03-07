<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'short_description' => 'required',
            'long_description' => 'required',
            'type' => 'required',
            'real_price' => 'required',
            'lesson' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
}

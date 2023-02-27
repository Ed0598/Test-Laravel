<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return[
            'name'=>'required|min:3',
            'address'=>'required',
            'zipCode'=>'required|numeric',
            'town'=>'required',
            'country'=>'required',
            'description'=>'required',
            'review'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'The name is required',
            'name.min'=>'The name must be at least 3 characters',
            'address.required'=>'The address is required',
            'zipCode.required'=>'The zip code is required',
            'zipCode.numeric'=>'The zip code must be a number',
            'town.required'=>'The town is required',
            'country.required'=>'The country is required',
            'description.required'=>'The description is required',
            'review.required'=>'The review is required',
        ];
    }
}

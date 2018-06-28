<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
          'name'=> 'required|max:40|min:3',
          'business'=> '|max:40|min:3',
          'address'=> 'required|max:200|min:10',
          'phone'=> 'required|max:9|min:9',
          'email'=> 'required|max:30|min:10',
          'dui'=> 'max:10|min:10',
          'nit'=> 'required|max:17|min:17',
        ];
    }
}

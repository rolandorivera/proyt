<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
          'lastName'=> 'required|max:40|min:3',
          'dui'=> 'required|max:10|min:10',
          'nit'=> 'required|max:17|min:17',
          'isss'=> 'required|max:9|min:9',
          'afp'=>'required|max:12|min:12',
          'position'=> 'required|in:Administrador,Usuario',
      ];
    }
}

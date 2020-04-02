<?php

namespace App\Http\Requests;

//use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use App\Http\Requests\Requests;

//class ProductoRequest extends FormRequest
class ProductoRequest extends Request
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
            'nombre' => 'required|max:255',
            'descripcion' => 'required|min:10',
            'precio' => 'required|numeric',
        ];
    }
}


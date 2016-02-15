<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUcenecRequest extends Request
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'imeUcenec'            => 'required|min:3',
                    'priimekUcenc'        => 'required|min:3',
                    'naslov'                => 'required',
                    'posta_postanStevilka'  => 'required|Integer|Min:1',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'imeUcenec'            => 'required|min:3',
                    'priimekUcenc'        => 'required|min:3',
                    'naslov'                => 'required',
                    'posta_postanStevilka'  => 'required|Integer|Min:1',
                ];
            }
            default:break;
        }
    }
}

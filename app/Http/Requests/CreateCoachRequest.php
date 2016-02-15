<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCoachRequest extends Request
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
                    'imeUcitelj'            => 'required|min:3',
                    'priimekUcitelj'        => 'required|min:3',
                    'emailUcitelj'          => 'required|email|unique:users,email',
                    'naslov'                => 'required',
                    'posta_postanStevilka'  => 'required|Integer|Min:1',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'imeUcitelj'            => 'required|min:3',
                    'priimekUcitelj'        => 'required|min:3',
                    'emailUcitelj'          => 'required|email',
                    'naslov'                => 'required',
                    'posta_postanStevilka'  => 'required|Integer|Min:1',
                ];
            }
            default:break;
        }

    }
}

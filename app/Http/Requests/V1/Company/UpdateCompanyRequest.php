<?php

namespace App\Http\Requests\V1\Company;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'corporate_name' => 'string|required',
            'cnpj' => 'required',
            'fantasy_name' => 'string|required',
        ];
    }
}

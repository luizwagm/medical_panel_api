<?php

namespace App\Http\Requests\V1\Company;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLegends\PtBrValidator\Rules\Cnpj;

class StoreCompanyRequest extends FormRequest
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
            'corporate_name' => ['string', 'required'],
            'cnpj' => ['string', 'required', new Cnpj],
            'fantasy_name' => ['string', 'required']
        ];
    }
}

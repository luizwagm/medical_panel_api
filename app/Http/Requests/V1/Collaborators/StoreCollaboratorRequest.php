<?php

namespace App\Http\Requests\V1\Collaborators;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use LaravelLegends\PtBrValidator\Rules\CelularComDdd;
use LaravelLegends\PtBrValidator\Rules\Cpf;

class StoreCollaboratorRequest extends FormRequest
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
            'full_name' => ['required'],
            'admission_date' => ['required'],
            'cpf' => ['required', Rule::unique('collaborators', 'cpf')->whereNull('deleted_at'), new Cpf],
            'phone' => ['required', new CelularComDdd],
            'address' => ['required'],
            'email' => ['required', Rule::unique('collaborators', 'email')->whereNull('deleted_at')],
            'password' => ['required', 'string'],
        ];
    }
}

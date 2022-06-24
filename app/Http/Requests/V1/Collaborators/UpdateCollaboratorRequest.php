<?php

namespace App\Http\Requests\V1\Collaborators;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLegends\PtBrValidator\Rules\CelularComDdd;
use LaravelLegends\PtBrValidator\Rules\Cpf;

class UpdateCollaboratorRequest extends FormRequest
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
            'id' => ['required', 'integer', 'exists:collaborators,id'],
            'full_name' => ['required'],
            'admission_date' => ['required'],
            'cpf' => ['required', new Cpf],
            'phone' => ['required', new CelularComDdd],
            'address' => ['required'],
            'email' => ['required']
        ];
    }
}

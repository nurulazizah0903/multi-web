<?php

namespace Modules\TaxModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryTaxRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'country_id' => 'required|unique:country_taxes,country_id,'.$this->id ?? 0,
            'tax_percentage' => 'required|integer|max:191',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}

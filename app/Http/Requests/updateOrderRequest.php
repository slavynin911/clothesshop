<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateOrderRequest extends FormRequest
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
		'dataOrders' => 'required',
		'dataIspolnenia' => 'required',
		'clients_id' => 'required',
        ];
    }
}

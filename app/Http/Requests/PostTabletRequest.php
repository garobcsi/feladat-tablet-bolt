<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostTabletRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "manufacturer_id"=> ['required','exists:manufacturers,id'],
            "name" => ['required','string','min:1'],
            "screen_size" => ['required','numeric',"max:22","min:5"],
            "ram" =>['required','numeric','min:1'],
            "storage" => ['required','numeric','min:1','max: 64'],
            "mobile_network" => ['string', Rule::in(['3g','4g','5g','LTE']),'nullable'],
            "price" => ['required','min:0','numeric'],
            "profit" => ['required','min:0','numeric'],
        ];
    }
}

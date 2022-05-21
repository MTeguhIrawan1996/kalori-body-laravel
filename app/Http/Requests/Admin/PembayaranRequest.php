<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PembayaranRequest extends FormRequest
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
        'user_id'  => 'required|exists:users,id',
        'status_pembayaran' => 'required', 
        'total_bayar' => 'required|max:255',
        'tgl_bayar' => 'required',  
        ];
    }
}
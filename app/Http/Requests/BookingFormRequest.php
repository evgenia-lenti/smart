<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'form.first_name' => 'required|string|max:40',
            'form.last_name' => 'required|string|max:40',
            'form.email' => 'required|email',
            'form.telephone' => 'required|digits:10'
        ];
    }

    public function messages()
    {
        return [
            'form.first_name.required' => 'Το όνομα είναι υποχρεωτικό.',
            'form.first_name.max' => 'Επιτρέπονται μέχρι 40 χαρακτήρες.',
            'form.first_name.string' => 'Το όνομα πρέπει να αποτελείται από γράμματα.',

            'form.last_name.required' => 'Το επίθετο είναι υποχρεωτικό.',
            'form.last_name.max' => 'Επιτρέπονται μέχρι 40 χαρακτήρες.',
            'form.last_name.string' => 'Το επίθετο πρέπει να αποτελείται από γράμματα.',

            'form.telephone.required' => 'Το τηλέφωνο είναι υποχρεωτικό.',
            'form.telephone.digits' => 'Το τηλέφωνο πρέπει να αποτελείται από 10 αριθμούς.',

            'form.email.required' => 'Το email είναι υποχρεωτικό.',
            'form.email.email' => 'Εισάγετε ένα έγκυρο email.'
        ];
    }
}

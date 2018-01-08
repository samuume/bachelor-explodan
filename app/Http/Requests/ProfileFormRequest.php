<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileFormRequest extends FormRequest
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
          // 'name' => 'required',
          // 'email_address' => 'required|email',
          // 'categories' => 'required',
          // 'city' => 'required',
          // 'country' => 'required',
          // 'travel_session' => 'required',
          // 'est_time' => 'required',
          // 'title' => 'required',
          // 'img1' => 'required|image',
          // 'excerpt' => 'required',
          // 'img2' => 'required|image',
          // 'msg' => 'required',
          // 'img3' => 'required|image',
        ];
    }
}

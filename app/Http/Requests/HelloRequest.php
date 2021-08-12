<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if($this->path()=='hello')
      {
        return true;
      }else {
        return false;
      }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'mail' => 'email',
          'age' => 'numeric|hello',//'numeric|between:0,150',
        ];
    }

    public function messages()
    {
return['name.required'=>'名無しは許可されていません。',
'mail.email'=>'連絡先は正しく入力して下さい。',
'age.between'=>'地球人として有り得る年齢を入力下さい',
'age.numeric'=>'年齢を数値で入力下さい',
'age.hello'=>'Hello!入力は偶数のみ受け付けます。',
];

    }
}

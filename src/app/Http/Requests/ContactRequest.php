<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPUnit\Framework\returnSelf;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns','max:255',],
            'tell' => ['required', 'numeric', 'digits_between:10,11'],
        ];
    }
    public function messages()
    {
        return [
        'name.required' => '名前を入力してください',
        'name.string' => '名前を文字列で入力してください',
        'name.max' => '名前を255文字以下で入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.string' => 'メールアドレスを文字列で入力してください',
        'email.email' => '有効なメールアドレス形式を入力してください',
        'email.max' => 'メールアドレスを255文字以下で入力してください',
        'tell. required' => '電話番号を入力してください',
        'tell.numeric' => '電話番号を数値で入力してください',
        'tell.digits_between' => '電話番号を10桁から11桁で入力してください',
        ];
    }
}

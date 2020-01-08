<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFolder extends FormRequest
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
            /*
             *ここでの記述で入力欄ごとにチェックするルールを定義する。
             * 配列のキーがHTML_input要素_name属性に対応する。
             */

            // フォルダーのタイトルは'必須|最大20文字'である設定。
            'title' => 'required|max:20',

        ];
    }

    public function attributes()
    {
        return [
            'title' => 'フォルダ名',
        ];
    }
}

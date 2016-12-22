<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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

      $id = $this->article;
      return [
          'nama' => 'required|unique:articles,nama,'.$id.'|min:5'
      ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Title is required, at least fill a character',
            'nama.unique' => 'Title must unique, take another title'
        ];
    }
}

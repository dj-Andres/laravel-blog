<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id  == auth()->user()->id){
            return true;
        }else{
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
        $rules=[
            'nombre'=>'required',
            'slug'=>'required|unique:posts',
            'status'=>'required|in:0,1',
            'file'=> 'image'
        ];

        if($this->status == 1){
            $rules=array_merge($rules,[
                'category_id'=>'required',
                'tags'=>'required',
                'extract'=>'required',
                'body'=>'required'
            ]);
        }

        return $rules;
    }
}

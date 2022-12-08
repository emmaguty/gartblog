<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id == auth()->user()->id){
            return true;
        }else{
            return true;
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()

    {
        
        $post = $this->route()->parameter('post');

        $rules = [
            

            'name' => 'required',
            //'user_id' => 'required',
            'slug' => 'required|unique:posts,slug',
            //'category_id' => 'required',
            'status'=> 'required|in:1,2',
            'file' => 'image'
        ];

        if($post){
            $rules['slug'] = 'required|unique:posts,slug,' . $post->id;
        }

        if($this->status == 2){

            $rules= array_merge($rules,[

                'tags'=> 'required',

                'extract' => 'required',

                'body' => 'required'

            ]);



        }

        return $rules;

    }
}

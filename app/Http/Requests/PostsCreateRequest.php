<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostsCreateRequest extends Request
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
            // ako nemamo ovde kategorije ne vodi nigde nas zahtev

//            'category_id' =>'required',
//            'photo_id'    =>'required',
//            'title'       =>'required',
//            'body'        =>'required'




        ];
    }
}
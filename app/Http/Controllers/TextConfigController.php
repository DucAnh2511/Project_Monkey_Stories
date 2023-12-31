<?php

namespace App\Http\Controllers;

use App\Models\Text_Config;
use App\Repositories\TextConfigRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TextConfigController extends CRUD_Base_Controller
{

    public function getRepo()
    {
        // TODO: Implement getRepo() method.
        return TextConfigRepository::class;
    }

    public function createValidate(Request $request)
    {
        // TODO: Implement createValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'page_id'=>['required','integer','min:1'],
            'text_id'=>['required','integer','min:1'],
            'position'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'page_id','text_id','position'
        ]);
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'page_id'=>['required','integer','min:1'],
            'text_id'=>['required','integer','min:1'],
            'position'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'page_id','text_id','position'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\TouchRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TouchesController extends CRUD_Base_Controller
{
    //

    public function getRepo()
    {
        // TODO: Implement getRepo() method.
        return TouchRepository::class;
    }

    public function createValidate(Request $request)
    {
        // TODO: Implement createValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'page_id'=>['required','integer','min:1'],
            'text_id'=>['required','integer','min:1'],
            'data'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'page_id','text_id','data'
        ]);
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'page_id'=>['required','integer','min:1'],
            'text_id'=>['required','integer','min:1'],
            'data'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'page_id','text_id','data'
        ]);
    }
}

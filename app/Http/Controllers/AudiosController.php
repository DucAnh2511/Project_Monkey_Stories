<?php

namespace App\Http\Controllers;

use App\Repositories\AudioRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AudiosController extends CRUD_Base_Controller
{

    public function getRepo()
    {
        // TODO: Implement getRepo() method.
        return AudioRepository::class;
    }

    public function createValidate(Request $request)
    {
        // TODO: Implement createValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'text_id'=>['required','integer','min:1'],
            'link'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'text_id','link'
        ]);
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'text_id'=>['required','integer','min:1'],
            'link'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'text_id','link'
        ]);
    }
}

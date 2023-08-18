<?php

namespace App\Http\Controllers;

use App\Repositories\TextRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TextsController extends CRUD_Base_Controller
{
    //

    public function getRepo()
    {
        // TODO: Implement getRepo() method.
        return TextRepository::class;
    }

    public function createValidate(Request $request)
    {
        // TODO: Implement createValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'text'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'text'
        ]);
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'text'=>['required']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'text'
        ]);
    }
}

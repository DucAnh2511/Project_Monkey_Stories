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
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return null;
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return null;
    }
}

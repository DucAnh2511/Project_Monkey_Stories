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
        ]);
        if($validator->failed()){
            return $validator->messages();
        }
        return null;
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
        ]);
        if($validator->failed()){
            return $validator->messages();
        }
        return null;
    }
}

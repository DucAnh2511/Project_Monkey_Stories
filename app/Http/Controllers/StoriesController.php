<?php

namespace App\Http\Controllers;

use App\Repositories\StoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoriesController extends CRUD_Base_Controller
{

    public function getRepo()
    {
        // TODO: Implement getRepo() method.
        return StoryRepository::class;
    }

    public function createValidate(Request $request)
    {

        // TODO: Implement createValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'name'=>['required','max:255'],
            'thumbnail'=>['required','max:1000'],
            'coinEarn'=>['required','integer','min:1','max:1000']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'name','thumbnail','coinEarn'
        ]);
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'name'=>['required','max:255'],
            'thumbnail'=>['required','max:1000'],
            'coinEarn'=>['required','integer','min:1','max:1000']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'name','thumbnail','coinEarn'
        ]);
    }
}

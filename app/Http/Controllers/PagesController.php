<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends CRUD_Base_Controller
{
    //

    public function getRepo()
    {
        // TODO: Implement getRepo() method.
        return PageRepository::class;
    }

    public function createValidate(Request $request)
    {
        // TODO: Implement createValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'story_id'=>['required','integer','min:1'],
            'background'=>['required'],
            'page_order'=>['required','integer','min:1']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'story_id','background','page_order'
        ]);
    }

    public function updateValidate(Request $request)
    {
        // TODO: Implement updateValidate() method.
        $validator = Validator::make($request->all(),[
            //Validate below here
            'story_id'=>['required','integer','min:1'],
            'background'=>['required'],
            'page_order'=>['required','integer','min:1']
        ]);
        $message = $validator->messages();
        if($validator->failed()){
            return $message;
        }
        return $request->only([
            'story_id','background','page_order'
        ]);
    }
}

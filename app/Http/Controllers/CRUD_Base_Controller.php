<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

abstract class CRUD_Base_Controller extends Controller
{
    protected $modelRepo;

    public function __construct()
    {
        $this->setRepo() ;
    }
    abstract public function getRepo();

    /**
     * Set model
     */
    public function setRepo()
    {
        $this->modelRepo = app()->make(
            $this->getRepo()
        );
    }
    public function index(){

        return $this->modelRepo->getAll();
    }
    public function create(Request $request){
        $res = $this->createValidate($request);
        if( $res == null){
            return $this->modelRepo->create($request->all());
        }
        else return response()->json([
            'message'=>$res
        ]);

    }
    public function show($id){
        return $this->modelRepo->show($id);
    }
    public function update(Request $request,$id){
        $res = $this->updateValidate($request);
        if($res == null){
            return $this->modelRepo->update($id,$request->all());
        }
        else return response()->json([
            'message'=>$res
        ]);
    }
    public  function delete($id){
        return $this->modelRepo->delete($id);
    }

    abstract public function createValidate(Request $request);
    abstract public function updateValidate(Request $request);


}

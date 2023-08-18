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
        //check validate
        $res = $this->createValidate($request);

        //$res return string if request validate fail or array with accept keys when pass
        //Pass validate
        if(is_array($res)){
            return $this->modelRepo->create($res);
        }
        //Fail validate
        else return response()->json([
            'status'=>422,
            'message'=>$res
        ],422);

    }
    public function show($id){
        return $this->modelRepo->show($id);
    }
    public function update(Request $request,$id){
        //check validate
        $res = $this->updateValidate($request);
        if(is_array($res)){
            return $this->modelRepo->update($id,$res);
        }
        else return response()->json([
            'status'=>422,
            'message'=>$res
        ]);
    }
    public  function delete($id){
        return $this->modelRepo->delete($id);
    }

    abstract public function createValidate(Request $request);
    abstract public function updateValidate(Request $request);


}

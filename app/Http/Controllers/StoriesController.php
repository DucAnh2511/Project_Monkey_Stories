<?php

namespace App\Http\Controllers;

use App\Repositories\StoryRepository;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    //
    protected $classRepository;
    public function __construct(StoryRepository $classRepository)
    {
        $this->classRepository = $classRepository;
    }
    public function index(){
        return $this->classRepository->getAll();
    }
    public function create(Request $request){
        return $this->classRepository->create($request->all());
    }
    public function show($id){
        return $this->classRepository->show($id);
    }
    public function update(Request $request,$id){
        return $this->classRepository->update($id,$request->all());
    }
    public  function delete($id){
        return $this->classRepository->delete($id);
    }
}

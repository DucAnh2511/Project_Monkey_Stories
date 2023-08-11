<?php

namespace App\Http\Controllers;

use App\Repositories\StoryRepository;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    //
    protected $storyRepository;
    public function __construct(StoryRepository $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }
    public function index(){
        return $this->storyRepository->getAll();
    }
    public function create(Request $request){
        return $this->storyRepository->create($request->all());
    }
    public function show($id){
        return $this->storyRepository->show($id);
    }
    public function update(Request $request,$id){
        return $this->storyRepository->update($id,$request->all());
    }
    public  function delete($id){
        return $this->storyRepository->delete($id);
    }
}

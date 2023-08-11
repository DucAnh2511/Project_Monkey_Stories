<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    //model muốn tương tác
    protected $model;

    //khởi tạo
    public function __construct()
    {
        $this->setModel();
    }

    //lấy model tương ứng
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = $this->model->find($id);
        return response()->json($data);
    }

    public function create($attributes = [])
    {
        $this->model->create($attributes);
        return response()->json([
            'status'=>200,
            'mesage'=>'Create data success!'
        ],200);

    }

    public function update($id, $attributes = [])
    {
        $result = $this->model->find($id);
        if ($result) {
            $result->update($attributes);
            return response()->json([
                'status' => 200,
                'message' => 'Update data success!'
            ],200);
        }

        return response()->json([
        'status' => 422,
        'message' => 'Fail to update, please try again!'
    ],422);
    }

    public function delete($id)
    {
        $result = $this->model->find($id);
        if ($result) {
            $result->delete();

            return response()->json([
                'status'=>200,
                'message'=>'Delete data success!'
            ],200);
        }

        return response()->json([
            'status'=>404,
            'message'=>'ERROR please try again!'
        ],404);
    }
}

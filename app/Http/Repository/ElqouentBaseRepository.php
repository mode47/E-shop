<?php
namespace App\Http\Repository;

use Carbon\Carbon;

abstract class ElqouentBaseRepository implements BaseRepository{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function find($id){
        return $this->model->find($id);

    }
    public function all(){
        return $this->model->all();
    }
    public function create($data){
        $model = $this->model->create($data);
        return $model;
    }

    public function update($model,$data){
        $model->update($data);
        return true;
    }
    public function destroy($id){
        $model = $this->model->find($id);
        // dd($model);
        return $model->delete();
    }

    public function imageStore($image,$path = 'storage/uploads'){
        $fileName = Carbon::now()->format('Y-m-d-h-m-s').'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs($fileName,$path);
        return $path;
    }

}
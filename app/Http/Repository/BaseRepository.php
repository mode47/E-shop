<?php
namespace App\Http\Repository;
interface BaseRepository{
    public function find($id);
    public function create($data);
    public function update($model, $data);
    public function destroy($model);
    // public function paginate($perPage = 15, $pageName = "page");
    public function all();

    public function imageStore($image,$path = 'storage/uploads');
}

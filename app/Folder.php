<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    //TaskControllerの記述をシンプルにする。
    public function tasks()
    {
        return $this->hasMany('App\Task');
        // return $this->hasMany('App\Task' , 'folder_id' ,'id');の省略
    }
}

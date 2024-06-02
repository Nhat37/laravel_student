<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;
    //PHẢI THÊM 2 DÒNG SAU
    protected $primaryKey = 'ClassRoomID';
    protected $table = 'classrooms';
}

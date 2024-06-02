<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\ClassRoom;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'StudentID';

    public function ClassRoom(){
        return $this->belongsTo(ClassRoom::class,'ClassRoomID','ClassRoomID');
    }
    protected $fillable = ['StudentID','StudentName','StudentEmail','StudentGender','ClassRoomID'];
}

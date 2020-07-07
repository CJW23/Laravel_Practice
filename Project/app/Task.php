<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //두개의 속성만 입력받으라는 뜻
    protected $fillable = ['title', 'des', 'userid'];

    //해당 속성을 제외하고 입력받으라는 듯
    //protected $guarded = ['title'];
}

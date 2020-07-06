<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller{
    public function project(){
        //Project라는 model의 데이터를 가져와라
        $projects = \App\Project::all();
        return view('projects.index', [
            'projects' => $projects
        ]);
    }
}

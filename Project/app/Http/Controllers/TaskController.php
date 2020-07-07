<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\BlankValidate;

class TaskController extends Controller
{
    public function indexRedirect()
    {
        return redirect('/tasks');
    }
    //데이터 리스트 출력
    public function index()
    {
        //데이터 리스트 가져옴
        $list = Task::all();

        return view('tasks.index', [
            'lists' => $list
        ]);
    }

    //등록 화면
    public function create()
    {
        return view('tasks.create');
    }

    //등록 수행
    public function store(Request $request, BlankValidate $validate)
    {
        //검증
        $validate->validated();

        //등록 수행
        Task::create([
            'title' => $request->input('title'),
            'des' => $request->input('des'),
            'userid' => auth()->id(),
        ]);
        return redirect('/tasks');
    }

    //데이터 상세 보기
    //Task Model $task id에 맞는 데이터를 알아서 가져옴
    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    //수정 화면
    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    //수정
    public function update(Task $task, Request $request, BlankValidate $validate)
    {
        //검증
        $validate->validated();

        //업데이트 수행
        $task->update([
            'title' => $request->input('title'),
            'des' => $request->input('des')
        ]);
        return redirect('/tasks');
    }

    //삭제
    public function destroy(Task $task)
    {
        //삭제 수행
        $task->delete();
        return redirect('/tasks');
    }


}

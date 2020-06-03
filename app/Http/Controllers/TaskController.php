<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Todo;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        $tasks = Task::orderBy('id','asc')->get();

        return view('task.index')->with('todos',Todo::all())
                                ->with('task',Task::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('task.create')->with('todos',Todo::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ]);

        $task = new Task([
            'title' => $request->get('title')
        ]);;



        $task->save();

        return redirect('task.index')->with('success', '新しいタスク作成しました！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return view('task.index')->with('success', 'タスクを１つ完了しました！');
    }
}

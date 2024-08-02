<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use App\Models\Categories;

use Illuminate\Http\Request;

class TâcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=tasks::all();
        $data = compact('tasks');
        return view('todoList.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();

        return view('todoList.create', [
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'due_date' => 'required',
            'category_id' => 'required'
        ]);
        $task = new Tasks;
        $task ->title  = $request['title'];
        $task ->description  = $request['description'];
        $task ->status  = $request['status'];
        $task ->due_date  = $request['due_date'];
        $task ->category_id  = $request['category_id'];
        $task->save();
        return redirect()->route("todo.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Tasks::findOrFail($id);
        $categories = Categories::all();
        return view('todoList.show',compact('task','categories'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Tasks::findOrFail($id);
        $categories = Categories::all();
        return view('todoList.update',compact('task','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'due_date' => 'required',
            'category_id' => 'required'
        ]);
        $id=$request['id'];
        $task= Tasks::find($id);
        $task ->title  = $request['title'];
        $task ->description  = $request['description'];
        $task ->status  = $request['status'];
        $task ->due_date  = $request['due_date'];
        $task ->category_id  = $request['category_id'];
        $task->save();
        return redirect()->route("todo.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task= Tasks::findOrFail($id);
        $task->delete();
        return redirect()->route("todo.index");
    }

    public function search()
    {
        $q= request()->input('q');
        $tasks = Tasks::where('category_id', 'like', "%$q%")
                ->orWhere('status', 'like', "%$q%")
                ->paginate(2);

        return  view('todoList.search')->with('tasks', $tasks);
        //dd($q);
    }
}

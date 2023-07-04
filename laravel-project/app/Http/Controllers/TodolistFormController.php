<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;
use App\assign_persons;
use Illuminate\Support\Facades\Auth;

class TodolistFormController extends Controller
{

    // タスクを一覧で表示
    public function index()
    {

        if (Auth::check()) {
            $todos = todos::orderBy('id', 'asc')->get();
        
            $estimate_hour_sum = 0;
            foreach($todos as $todo) {
                $estimate_hour_sum += $todo->estimate_hour;
            }
            
            return view('todo_list', [
                "todos" => $todos,
                "estimate_hour_sum" => $estimate_hour_sum,
            
            ]);

        } else {
            return view('auth/login');
        }

        
    }

    public function createPage()
    {
        if (Auth::check()) {
            $assign_persons = assign_persons::orderBy('id', 'asc')->get();
        
            return view('todo_create', [
                "assign_persons" => $assign_persons
            ]);
        } else {
            return view('auth/login');
        }

        
    }

    public function create(Request $request)
    {

        if (Auth::check()) {
            
            $validator = $request->validate([
                'task_name' => 'required',
                'task_description' => 'required',
                'name' => 'required',
                'estimate_hour' => 'required'
            ]);


            $todos = new todos();
            $todos->task_name = $request->task_name;
            $todos->task_description = $request->task_description;
            $todos->assign_person_name = $request->name;
            $todos->estimate_hour = $request->estimate_hour;
            $todos->save();

            return redirect('/');

        } else {
            return view('auth/login');
        }

    }

    public function editPage($id)
    {
        if (Auth::check()) {
            $todo = todos::find($id);
            return view('todo_edit', [
                "todo" => $todo
            ]);
        } else {
            return view('auth/login');
        }

        
    }

    public function edit(Request $request)
    {
        if (Auth::check()) {
            todos::find($request->id)->update([
                'task_name' => $request->task_name,
                'task_description' => $request->task_description,
                'assign_person_name' => $request->assign_person_name,
                'estimate_hour' => $request->estimate_hour
            ]);
            return redirect('/');
        } else {
            return view('auth/login');
        }

       
    }

    public function deletePage($id)
    {
        if (Auth::check()) {
            $todo = todos::find($id);
            return view('todo_delete', [
                "todo" => $todo
            ]);
        } else {
            return view('auth/login');
        }

        
    }

    public function delete(Request $request)
    {
        if (Auth::check()) {
            $todos = todos::find($request->id);
            $todos->delete();
            return redirect('/');
        } else {
            return view('auth/login');
        }

       
    }

    
}

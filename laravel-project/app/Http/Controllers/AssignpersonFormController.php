<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assign_persons;
use Illuminate\Support\Facades\Auth;

class AssignpersonFormController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $assign_persons = assign_persons::orderBy('id', 'asc')->get();
        
            return view('member-list', [
                "assign_persons" => $assign_persons,
            ]);
        } else {
            return view('auth/login');
        }

        
    }


    public function assign()
    {
        if (Auth::check()) {
            $tasks = assign_persons::orderBy('id', 'asc')->get();
            return view('person_list', [
                "persons" => $persons
            ]);
        } else {
            return view('auth/login');
        }

        
    }


    public function addMemberPage()
    {
        if (Auth::check()) {
            return view('add_member');
        } else {
            return view('auth/login');
        } 

        
    }

    public function add(Request $request) 
    {
        if (Auth::check()) {
            $validator = $request->validate([
                'name' => 'required',
                'age' => 'required',
                'efficiency' => 'required'
            ]);
                 
            $assign_persons = new assign_persons();
            $assign_persons->name = $request->name;
            $assign_persons->age = $request->age;
            $assign_persons->efficiency = $request->efficiency;
            $assign_persons->save();
            return redirect('/member-list');
        } else {
            return view('auth/login');
        }
    
       
    }



    public function editPage($id)
    {
        if (Auth::check()) {
            $assign_person = assign_persons::find($id);
            return view('edit_member', [
                "assign_person" => $assign_person
            ]);
        } else {
            return view('auth/login');
        }

        
    }


    public function edit(Request $request)
    {
        if (Auth::check()) {
            assign_persons::find($request->id)->update([
                'name' => $request->name,
                'age' => $request->age,
                'efficiency' => $request->efficiency
            ]);
            return redirect('/member-list');
        } else {
            return view('auth/login');
        }

       
    }

    public function removeMember($id)
    {
        if (Auth::check()) {
            $assign_person = assign_persons::find($id);
        return view ('remove_member', [
            "assign_person" => $assign_person
        ]);
        } else {
            return view('auth/login');
        }

       
        
    }

    public function remove(Request $request)
    {
        if (Auth::check()) {
            $assign_person = assign_persons::find($request->id);
            $assign_person->delete();
            // $assign_persons->delete();
            return redirect('/member-list');
        } else {
            return view('auth/login');
        }

        
    }
}

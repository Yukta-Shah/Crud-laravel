<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Validator;
class UserController extends Controller
{
    public function index()
    {
       return response()->json(Users::latest()->get());
        //$users = Users::all();
        //return view('users.index', compact('users'));
    }

    public function create()
    {
        //return view('users.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'mobile' => 'required',
        // ]);

        // Users::create($validatedData);

        //return redirect()->route('users.index')->with('success', 'User created successfully.');
        Users::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
        ]);
        return response()->json('successfully created');
    }

    public function show($id)
    {
       // return view('users.show', compact('users'));
    }

    public function edit($id)
    {
        return response()->json(Users::whereId($id)->first());
        //return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'mobile' => 'required',
        // ]);

        // $users->update($validatedData);

        // return redirect()->route('users.index')->with('success', 'User updated successfully.');
        $users = Users::whereId($id)->first();
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
        ]);
        return response()->json('success');
    }

    public function destroy(Users $users)
    {

        Users::whereId($id)->first()->delete();
        return response()->json('success');
        //$users->delete();
        //return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}


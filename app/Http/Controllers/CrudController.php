<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $user = User::all();
        return view('welcome', ['user' => $user]);
    }

    public function store(Request $request){
        $user = new User;

        $user->nome = $request->nome;
        $user->sobrenome = $request->sobrenome;

        $user->save();
        return redirect('/');
    }

    public function destroy($id){ 
        User::findOrFail($id)->delete();
        return redirect('/');
    }

    public function edit($id){ 
        $edit = $user = User::findOrFail($id);
        $user = User::all();
        return view('/welcome', ['edit' => $edit, 'user' => $user]);
    }

    public function update(Request $request){ 
        User::findOrFail($request->id)->update($request->all());
        return redirect('/');
    }
}

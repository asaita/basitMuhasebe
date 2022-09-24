<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;

class todoController extends Controller
{
    public function todo()
    {
        $todolist=todolist::all();

        return view('to-do',compact('todolist'));
    }
    public function sil()
    {
        $id=$_GET['rowId'];
        todolist::findorFail($id)->delete();
       return back();
    }
}

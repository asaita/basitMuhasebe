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
       
    }
    public function isdoneOrNot()
    {
        $id=$_GET['rowId'];
        $isDone=todolist::findorFail($id)->isDone;
        if ($isDone==0)
        todolist::where('id',$id)->update(array('isdone'=>1));
        else
        todolist::where('id',$id)->update(array('isdone'=>0));
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;

class todoController extends Controller
{
    public function todo()
    {
        $todolist=todolist::all();

        //Eğer tüm görevler aynı ise(yapılmışsa yada yapılmamışsa) 1 değeri döcecek
        $allIsDoneSame=todolist::distinct()->count('isDone');
        if($allIsDoneSame==1){
            //Tüm görevler aynı değerde ise herhangi bir görevin değerini öğrenip tüm değerler 
            //1 yada 0 öğrenmiş oluyoruz.
            $firstIsDoneData=$todolist->first()->isDone;
            if($firstIsDoneData==1) $whatIsAllDuties=1; else $whatIsAllDuties=0;
 
        } else {
            //1 ve 0 dan farklı bir değer girdik
            $whatIsAllDuties=2;
        }
       
        
        

        return view('to-do',compact('todolist','whatIsAllDuties'));
      
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
    public function update()
    {
        $isDone=$_GET['isDone'];
        if($isDone==1) 
        todolist::query()->update(array('isDone'=>1));
        Else
        todolist::query()->update(array('isDone'=>0));
       
       
    }
    public function add()
    {
        todolist::create([
            'todo'=>request('xx'),
            'isDone'=>1
        ]);  
       return redirect()->back();
    }
}
